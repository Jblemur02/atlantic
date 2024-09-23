<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atlantic Civil</title>
        <link rel="icon" href="./images/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="styles.css">
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const elementsToAnimate = document.querySelectorAll('.animate-on-scroll');
                elementsToAnimate.forEach((element) => element.classList.add('hidden'));

                const isInViewport = (element) => {
                    const rect = element.getBoundingClientRect();
                    return (
                        rect.top >= 0 &&
                        rect.left >= 0 &&
                        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                    );
                };

                const handleScroll = () => {
                    elementsToAnimate.forEach((element) => {
                        if (isInViewport(element)) {
                            element.classList.remove('hidden');
                            element.classList.add('appear-animation');
                        }
                    });
                };

                window.addEventListener('scroll', handleScroll);
                handleScroll(); // Trigger the function on page load to catch any elements already in view
            });
        </script>
    </head>
</html>