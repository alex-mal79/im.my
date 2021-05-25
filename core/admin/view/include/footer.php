        <footer class="footer">
            footer
        </footer>

    </div>    
    <script>
    // Основное меню
    // Меню аккордеон
    const acc = document.getElementsByClassName("menu__items");
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