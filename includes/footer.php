<footer class="py-8 bg-black text-center text-gray-600 text-sm border-t border-white/5">
        <div class="flex justify-center gap-6 mb-4">
            <a href="#" class="hover:text-white transition-colors">Instagram</a>
            <a href="#" class="hover:text-white transition-colors">LinkedIn</a>
            <a href="#" class="hover:text-white transition-colors">Email</a>
        </div>
        <p>&copy; <?php echo date('Y'); ?> NØWADAYS Studio. Monterrey, NL.</p>
    </footer>

    <script>
        lucide.createIcons();

        // Scroll Reveal
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</body>
</html>