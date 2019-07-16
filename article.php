<?php
	$db = new mysqli('52.53.161.121','tester','password','project_281');

	$article = null;

	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];

		$article = $db->query("SELECT articles.id, articles.title, AVG(articles_ratings.rating) AS rating
		FROM articles
		LEFT JOIN articles_ratings
		ON articles.id = articles_ratings.article
		WHERE articles.id = {$id};
		")->fetch_object();
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Individual Article</title>
</head>
<body>
	<?php if($article):    ?>
		<div class="article">
			This is article "<?php echo $article->title; ?>".
			<div class="article_rating">Rating: <?php echo round($article->rating);?>/5</div>
			<div class="article-rate">
				Rate this article:
				<?php foreach(range(1,5) as $rating):  ?>
					<a href="rate.php?article=<?php echo $article->id;?>&rating=<?php echo $rating?>"><?php echo $rating;?></a>
				<?php endforeach ?>
			</div> 
		</div>
	<?php endif ?>
</body>
</html>