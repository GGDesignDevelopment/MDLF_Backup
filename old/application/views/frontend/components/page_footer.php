			<nav id="menu_flotante" class="menu_flotante_<?php echo $menuPosition;?>">
				<?php echo $menuFlotante;?>
			</nav>
		</div> <!-- End Tag Div "Body" -->
		<footer>
			<h6>Copyright &copy; 2016 Mariana de la Fuente - cel +598 94 874 667 - mail info@marianadelafuente.com</h6>
		</footer>
		<?php $this->load->view('frontend/contacto');?>				
	    <!--<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>-->
		<!--<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
		<?php foreach ($scripts as $script) { echo $script; };?>
	</body>
</html>
