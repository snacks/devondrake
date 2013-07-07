
<div class="leftColumn">
<div id="reviewList" >
<?foreach($content['main']['reviewList'] as $reviewListItem):?>
  <div class="review">
  
   <p class="bookTitle"> <?=$reviewListItem['reviewText'];?> </p>

   <p class="reviewName"> <?=$reviewListItem['reviewName'];?></p>
	<?if(is_object($reviewListItem['freePDF'])):?>
	   <a href="<?=$reviewListItem['freePDF']->fullpath;?>"><?=$reviewListItem['freePDF']->filename;?></a>

   <?endif;?>

  </div>
<?endforeach;?>
</div>
</div>

<div class="rightColumn">
<?if(is_object($content['main']['coverImage'])):?>
 <img id="coverImage" src="<?=latticeurl::site($content['main']['coverImage']->original->fullpath);?>" width="<?=$content['main']['coverImage']->original->width;?>" height="<?=$content['main']['coverImage']->original->height;?>" alt="<?=$content['main']['coverImage']->original->filename;?>" />
<?endif;?>

</div>
