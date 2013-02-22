<div class="main">

<div class="leftColumn">
<p class="bookTitle"> <?=$content['main']['bioTitle'];?></p>

<p class="bio"> <?=$content['main']['bio'];?></p>
</div>

<div class="rightColumn">

<?if(is_object($content['main']['bioImage'])):?>
 <img id="bioImage" src="<?=latticeurl::site($content['main']['bioImage']->original->fullpath);?>" width="<?=$content['main']['bioImage']->original->width;?>" height="<?=$content['main']['bioImage']->original->height;?>" alt="<?=$content['main']['bioImage']->original->filename;?>" />
<?endif;?>
</div>

</div>
