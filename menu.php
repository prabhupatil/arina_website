<style>

.nav-links{
display:flex;
align-items:center;
gap:36px;
list-style:none;
}

.nav-links a{
color:var(--text-secondary);
text-decoration:none;
font-size:16px;
font-weight:500;
letter-spacing:1px;
cursor:pointer;
color: white;
padding: 8px 14px;
transition: 0.3s;
   
}

.nav-links a:hover{
color:#0066ff !important;
}

.nav-links a.active{
color: #0066ff !important;
}

/* TOGGLE BUTTON */

.mobile-menu-btn{
display:none;
background:none;
border:none;
font-size:28px;
cursor:pointer;
}

/* MOBILE MENU */

.mobile-nav{
position:fixed;
top:0;
right:-100%;
width:260px;
height:100vh;
background:#000;
display:flex;
flex-direction:column;
padding:40px 20px;
gap:20px;
transition:0.3s ease;
z-index:999;
}

.mobile-nav a{
color:#fff;
text-decoration:none;
font-size:18px;
border-bottom:1px solid #333;
padding-bottom:10px;
}

.mobile-nav.open {
    right: 0;
    z-index: 9999;
}
.mobile-nav
/* CLOSE BUTTON */

.close-btn{
background:none;
border:none;
font-size:26px;
color:#fff;
align-self:flex-end;
cursor:pointer;
}

/* MOBILE RESPONSIVE */


@media(max-width:1024px){
    .btn-primary {
   display:none;
}
#submitBtn{
    display: block !important;
}
}
@media(max-width:900px){

.nav-links{
display:none;

}
.btn-primary {
   display:none;
}
.mobile-menu-btn{
display:block;
color: white;
}

}

</style>


<div class="noise-overlay"></div>

<nav class="navbar" id="navbar">

<a class="nav-logo" href="/">
<img src="logo/ARINA logo_Color.png" width="200">
</a>

<ul class="nav-links">
<li><a href="/">Overview</a></li>
<li><a href="product.php">Product</a></li>
<li><a href="integrations.php">Integrations</a></li>
<li><a href="about.php">About</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>

<div style="display:flex;gap:12px;align-items:center">

<a class="btn-primary" href="contact.php#bookademo">
Book a Demo
</a>

<button class="mobile-menu-btn" onclick="toggleMenu()">☰</button>

</div>

</nav>


<div class="mobile-nav" id="mobile-nav">

<button class="close-btn" onclick="toggleMenu()">✕</button>

<a href="index.php">Overview</a>
<a href="product.php">Product</a>
<a href="integrations.php">Integrations</a>
<a href="about.php">About</a>
<a href="contact.php">Contact</a>

</div>


<script>

function toggleMenu(){
document.getElementById("mobile-nav").classList.toggle("open");
}

/* ACTIVE PAGE */

const currentPage = location.pathname.split("/").pop();

document.querySelectorAll(".nav-links a, .mobile-nav a").forEach(link=>{
if(link.getAttribute("href") === currentPage){
link.classList.add("active");
}
});

</script>