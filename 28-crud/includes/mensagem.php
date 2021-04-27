<?php
// Sessão
session_start();
if(isset($_SESSION['mensagem'])): ?>	

<script>
	// Mensagem
	window.onload = function() {
		  M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
      
	};
</script>

<script>
	// Input layout correto
	$(document).ready(function() {
   M.updateTextFields();
});
</script>

<?php
endif;
session_unset();
?>