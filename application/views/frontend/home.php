<!-- <div class="main">-->

<div class="leftColumn">

<p class="reviewText">" <?=$content['main']['reviewText'];?> "</p>

<p class="reviewer"> <?=$content['main']['reviewer'];?></p>

<p class="bookTitle"> <?=$content['main']['bookTitle'];?></p>

<p class="synopsis"> <?=$content['main']['synopsis'];?></p>

<p class="linkToPurchase"><a href=" <?=$content['main']['linkToPurchase'];?>"> Buy the Book! </a></p>
</div>



<!-- static content on the right -->

<div class="rightColumn">
<?if(is_object($content['main']['coverImage'])):?>
 <img id="coverImage" src="<?=latticeurl::site($content['main']['coverImage']->original->fullpath);?>" width="<?=$content['main']['coverImage']->original->width;?>" height="<?=$content['main']['coverImage']->original->height;?>" alt="<?=$content['main']['coverImage']->original->filename;?>" />
<?endif;?>



<p class="goodreads"> <?=$content['main']['goodreads'];?></p>

<p class="facebook"> <?=$content['main']['facebook'];?></p>
<!-- the twitter widget goes here -->

</div>
