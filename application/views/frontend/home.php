<!-- <div class="main">-->

<div class="leftColumn">

<p class="reviewText">" <?=$content['main']['reviewText'];?> "</p>

<p class="reviewer"> <?=$content['main']['reviewer'];?></p>

<p class="bookTitle"> <?=$content['main']['bookTitle'];?></p>

<p class="synopsis"> <?=$content['main']['synopsis'];?></p>

<a href=" <?=$content['main']['linkToPurchase'];?>" style="color:rgb(121, 12, 33);font-size:24px;">Buy the Book!</a>
</div>



<!-- static content on the right -->

<div class="rightColumn">
<?if(is_object($content['main']['coverImage'])):?>
 <img id="coverImage" src="<?=latticeurl::site($content['main']['coverImage']->original->fullpath);?>" width="<?=$content['main']['coverImage']->original->width;?>" height="<?=$content['main']['coverImage']->original->height;?>" alt="<?=$content['main']['coverImage']->original->filename;?>" />
<?endif;?>


<!--
<p class="goodreads"> <?=$content['main']['goodreads'];?></p>

<p class="facebook"> <?=$content['main']['facebook'];?></p>
 the twitter widget goes here -->

</div>
