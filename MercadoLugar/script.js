// --DarkMode--
let html = document.documentElement;

let btn = document.getElementById('toggleBtn');

let stored = localStorage.getItem('theme');

let preferDark = window.matchMedia && window.matchMedia('(prefers-color-shceme: dark)').matches;

function applyTheme(theme){

    if(theme === 'dark'){
        html.classList.add('dark');
        btn.innerText = '☀️';
    }else{

        html.classList.remove('dark');
        btn.innerText = '🌑';

    }
}

if(stored === 'dark' || stored === 'light'){
    applyTheme(stored);
}else{

    applyTheme(preferDark ? 'dark' : 'light');

}

btn.addEventListener('click', () => {
    let isNowDark = html.classList.toggle('dark');
    const theme = isNowDark ? 'dark' : 'light';
    localStorage.setItem('theme', theme);
    applyTheme(theme);
})
// --Hamburguer--
 const hambbtn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('icon-open');
        const iconClose = document.getElementById('icon-close');
        if(!hambbtn || !menu) return;
        hambbtn.addEventListener('click', function(){
          const expanded = this.getAttribute('aria-expanded') === 'true';
          this.setAttribute('aria-expanded', String(!expanded));
          menu.classList.toggle('hidden');
          iconOpen.classList.toggle('hidden');
          iconClose.classList.toggle('hidden');
        });
        document.querySelectorAll('#mobile-menu a').forEach(a => a.addEventListener('click', () => {
          if(window.innerWidth < 768){
            menu.classList.add('hidden');
            hambbtn.setAttribute('aria-expanded','false');
            iconOpen.classList.remove('hidden');
            iconClose.classList.add('hidden');
          }
        }));