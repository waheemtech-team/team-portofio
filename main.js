document.querySelectorAll('.nav nav a').forEach(a => a.addEventListener('click', () => document.body.classList.remove('open')));
if (!matchMedia('(prefers-reduced-motion: reduce)').matches && 'IntersectionObserver' in window) {
  const io = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } }), { threshold: .12 });
  document.querySelectorAll('.card').forEach(c => { c.classList.add('rv'); io.observe(c); });
}
document.querySelectorAll('[data-n]').forEach(el => {
  const t = +el.dataset.n; let i = 0;
  const s = setInterval(() => { i += Math.ceil(t / 30); if (i >= t) { i = t; clearInterval(s); } el.textContent = i + (el.dataset.s || ''); }, 35);
});
