function toggleMenu(){
    const nav=document.getElementById('mainNav');
    const btn=document.querySelector('.burger');
    const isOpen=nav.classList.toggle('show');
    btn.setAttribute('aria-expended',isOpen ? 'true':'false');
}