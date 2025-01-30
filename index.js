let lang_menu_open = false;
let navbar_bg = false
const navbar_element = document.getElementById("navbar")
const navbar_scrollY_amount = 1

const openLangMenu = (element) => {
    if (lang_menu_open) {
        element.setAttribute('data-open', 'false')
        lang_menu_open = false
    } else {
        element.setAttribute('data-open', 'true')
        lang_menu_open = true
    }
}

window.addEventListener("scroll", () => {
    if (scrollY <= navbar_scrollY_amount ) {
        if (navbar_bg) {
            navbar_element.removeAttribute("data-state")
            navbar_bg = false
        }
    } else {
        if (!navbar_bg) {
            navbar_element.setAttribute("data-state", "bg")
            navbar_bg = true
        }
    }
});

function updateThemeColor() {
    const themeColorMeta = document.querySelector('meta[name="theme-color"]');
    const isDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    themeColorMeta.setAttribute("content", isDarkMode ? "#1D1D1D" : "#F2F4F3");
}

updateThemeColor(); // Appliquer au chargement
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', updateThemeColor);