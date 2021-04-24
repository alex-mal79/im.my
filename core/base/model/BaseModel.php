<?php
namespace core\base\model;


use core\base\controller\Singleton;
use core\base\exceptions\DbException;

class BaseModel extends BaseModelMethods {
    use Singleton;
    protected $db;
    /**
     * Метод подключения к БД
     * BaseModel constructor.
     * @throws DbException
     */
    private function __construct(){
        $this->db = @new \mysqli(HOST, USER, PASS, DB_NAME);
        if($this->db->connect_error){
            throw new DbException('Ошибка подключения к базе данных: '
                . $this->db->connect_errno . ' ' . $this->db->connect_error);
        }
        $this->db->query("SET NAMES UTF8");
    }
    /**
     *Основной метод запросов к БД
     * @param $query
     * @param string $crud = r - SELECT / c - INSERT / u - UPDATE / d - DELETE
     * @param false $return_id
     * @return array|bool|int|string
     * @throws DbException
     */
    final public function query($query, $crud = 'r', $return_id = false){
        $result = $this->db->query($query);
        if($this->db->affected_rows === -1){
            throw new DbException('Ошибка в SQL запросе '
                . $query . ' - ' . $this->db->errno . ' ' . $this->db->error);
        }
        switch ($crud){
            case 'r':
                if($result->num_rows){
                    $res = [];
                    for($i = 0; $i < $result->num_rows; $i++){
                        $res[] = $result->fetch_assoc();
                    }
                    return $res;
                }
                return false;
                break;
            case 'c':
                if($return_id) return $this->db->insert_id;
                return true;
                break;
            default:
                return true;
                break;
        }
    }
    /**
     * Основной метод выборки данных
     * @param $table - Таблица БД
     * @param array $set
     * 'fields' => ['id', 'brand']
     * 'where' => ['brand' => 'AUDI', model => 'A4', 'engine' => '2.0']
     * 'operand' => ['=', '<>']
     * 'condition' => ['AND']
     * 'order' => ['model', 'brand']
     * 'order_direction' => ['ASC', 'DESC']
     * 'limit' => '10'
     * 'join' => [
     *       'join_table1' => [
     *          'table' => 'join_table1',
     *          'fields' => ['id as j_id', 'name as j_name'],
     *          'type' => 'left',
     *          'where' => ['brand' => 'BMW'],
     *          'operand' => ['='],
     *          'condition' => ['OR'],
     *          'on' => ['id', 'parent_id'],
     *          'group_condition' => 'AND'
     *      ],
     *       'join_table2' => [
     *          'table' => 'join_table2',
     *          'fields' => ['id as j2_id', 'name as j2_name'],
     *          'type' => 'left',
     *          'where' => ['brand' => 'BMW'],
     *          'operand' => ['<>'],
     *          'condition' => ['AND'],
     *          'on' => [
     *              'table' => 'auto',
     *              'fields' => ['id', 'parent_id']
     *          ]
     *      ]
     *   ]
     */
    final public function get($table, $set = []){
        $fields = $this->createFields($set, $table);
        $where = $this->createWhere($set, $table);
        if(!$where) $new_where = true;
            else $new_where = false;
        $join_arr = $this->createJoin($set, $table, $new_where);
        $fields .= $join_arr['fields'];
        $join = $join_arr['join'];
        $where .= $join_arr['where'];
        $fields = rtrim($fields, ',');

        $order = $this->createOrder($set, $table);
        $limit = $set['limit'] ? 'LIMIT ' . $set['limit'] : '';

        $query = "SELECT $fields FROM $table $join $where $order $limit";
        return $this->query($query);
    }
}