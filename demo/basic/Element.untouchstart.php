<!doctype html>
<html>
<head>
<?php 
	$key = 'Element.untouchstart()';
	include('../_include/header.php'); 
?>
</head>

<body>
<?php 
	include('../_include/nav.php'); 
?>

<div id="zxxBody" class="zxx_body">
	<div id="zxxSlide" class="zxx_side">
    	<?php include('../_include/slide.php'); ?>
    </div>
    <div class="zxx_api_detail">
    	<div class="zxx_api_content">
        	<h1 class="zxx_api_h1"><sub>Snap.svg demo之</sub><?php echo $key; ?></h1>
        	<h2>Element.untouchstart(handler)</h2>
        	<p>移除元素的<code>untouchstart</code>事件处理程序。</p>
            <h3>参数</h3>
            <ul>
            	<li><code>handler</code> 函数。事件处理程序。</li>
            </ul>
            <h3>返回值</h3>
            <p>对象。元素。</p>
        </div>
    </div>
</div>

<?php 
	include('../_include/footer.php'); 
?>
<script>

</script>
</body>
</html>