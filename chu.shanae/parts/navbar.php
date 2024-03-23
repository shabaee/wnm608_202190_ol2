
<header class="navbar">
 <script>
            const makeNav = (classes='') => {
                const links = ['Home','Store','About'];
                let ran = Math.floor(Math.random()*links.length);
                document.write(`
                    <div>
                    <nav class="${classes}">
                    <ul>
                    ${links.reduce((r,o,i)=>{
                        return r+`<li class="${ran==i? 'active':''}"><a href="#">${o}</a></li>`;
                    },'')}
                    </ul>
                    </nav>

                    </div>
                    `);
            }
        </script>

        <script>makeNav('nav nav-pills')</script>
    </div>

		<div class="container display-flex">
			<div class="flex-none">
			<div class="styletitle">Sonder</div>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Store</a></li>
					<li><a href="cart.php">Cart</a></li>
				</ul>
			</nav>
			</div>
		</div>
	</header>