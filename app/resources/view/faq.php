<style>
    header {
            background-color: #ff6e01;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
        #head{
            color: #000;
        }
</style>

<header>
    <h1 id="head"> Frequently Asked Questions</h1>
</header>
 <br>
    <?php 
   foreach ($faq as $faq) {
    echo '<div style="background-color: #f0f0f0; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 100%; margin-bottom: 20px;">';
    echo '<h2 style="margin-top: 0; color: #333;">' . $faq['title'] . '</h2>';
    echo '<p style="margin: 5px 0; font-size: 14px; color: #666;">' . $faq['description'] . '</p>';
    echo '</div>';
}
?>