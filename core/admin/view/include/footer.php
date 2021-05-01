<!-- Подвал -->
<footer class="footer">
    <h3>footer</h3>
</footer>

<script>
    // Основное меню
    // Меню аккордеон
    const acc = document.getElementsByClassName("main-side-menu__button");
    for (let i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            const panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

</body>
</html>