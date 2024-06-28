document.addEventListener('DOMContentLoaded', function() {
    const darkMode = document.getElementById('dark-mode');
    const lightMode = document.getElementById('light-mode');

    function setTheme(theme){
        if (theme == "dark"){
            lightMode.disabled = true;
            darkMode.disabled = false;
        } else{
            lightMode.disabled = false;
            darkMode.disabled = true;
        }
    }

    const PrefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
    setTheme(PrefersDarkScheme.matches ? "dark" : "light");

    window.matchMedia("(prefers-color-scheme: dark)").addEventListener('change',event => {
        setTheme(event.matches ? "dark" : "light");
    });

    const themeswitch = document.getElementById('themeSwitch');
      themeswitch.onchange = () => {
        if (themeswitch.checked) {
          document.getElementById('light-mode').disabled = true;
          document.getElementById('dark-mode').disabled = false;
        } else {
          document.getElementById('light-mode').disabled = false;
          document.getElementById('dark-mode').disabled = true;
        }
      };
});