<?php $blokk = true; $parent = "adm"; $pageAction = false; $pageLayout=""; $pageTitle = "New task"; include '../base-t3.php';?>

<?php startblock('page-actions') ?>
<?php endblock()?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<section class="w-50">
    <div class="form-group w-50"><label for="exampleFormControlInput" class="required">Input field</label><input type="text" id="exampleFormControlInput" placeholder="start typing ..." class="form-control"></div>
    <div class="form-group w-50"><label for="exampleFormControlInput4">Pick a date</label><input type="text" id="exampleFormControlInput4" name="date" class="form-control"></div>
    <div class="form-group w-50"><label for="exampleFormControlSelect1">Example select</label><select id="exampleFormControlSelect1" class="form-control"><option value="en"> </option><option value="en-us">English (US)</option><option value="es">Español (Spanish)</option><option value="de">Deutsch (German)</option><option value="tr">Türkçe (Turkish)</option><option value="zh-s">简体中文 (Chinese, Simplified)</option><option value="ja">日本語 (Japanese)</option><option value="nl">Nederlands (Dutch)</option></select></div>
    <div class="form-group w-75"><label for="exampleFormControlTextarea1" class="required">Example textarea</label><textarea id="exampleFormControlTextarea1" rows="3" class="form-control"></textarea></div>
    <div class="form-group w-75"><label for="exampleFormControlTextarea1">Example textarea</label>
        <div class="radio radio-primary">
            <input type="radio" name="radio1" id="radio2" value="option2">
            <label for="radio2">
                fdfdf 
            </label>
        </div>
        <div class="radio radio-primary">
            <input type="radio" name="radio1" id="radio2" value="option2">
            <label for="radio2">
                Bidfdd fdfd gd
            </label>
        </div>
        <div class="radio radio-primary">
            <input type="radio" name="radio1" id="radio2" value="option2">
            <label for="radio2">
                fdd jfdkjfklsj fjd fjddsfj 
            </label>
        </div>
        <div class="radio radio-primary">
            <input type="radio" name="radio1" id="radio2" value="option2">
            <label for="radio2">
                dkfjdk fdkjf dfjdjfdkljf djfkd
            </label>
        </div>
    </div>
    <button class="btn btn-primary">Send</button>
</section>              

<?php endblock()?>
