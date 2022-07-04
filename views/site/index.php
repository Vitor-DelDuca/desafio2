<?php

/** @var yii\web\View $this */



$this->title = 'Busca Produto - MLB';
?>
    <div class='m-4'>
        <h3 class='m-4'>Utilize a busca para encontar seu produto no Mercado Livre:</h3>
        <form class='' method='GET'>
            <label for='ml-id'><strong>ID do Produto</strong></label>
            <input class='' type='text' name='ml-id' placeholder='Ex: MLB1234567890'>
            <input type='submit' name='submit'>
        </form>
    </div>   
    <?php
    
    echo "
    <div class='d-flex align-items-center justify-content-center'>

        <div class='card border border-success' style='width: 100% \9;'>
            <img class='card-img-top img-fluid' src='$obj->thumbnail' alt='Imagem do produto procurado'>
            <div class='card-body'>
                <h5 class='card-title'>$obj->title</h5>
                <p class='card-text'><strong>ID Mercado Livre: </strong>$obj->id</p>
        </div>

        <ul class='list-group list-group-flush'>
            <li class='list-group-item'><strong>Valor:</strong> R$$obj->price</li>
            <li class='list-group-item'><strong>Qtd disponível:</strong> $obj->available_quantity unidades</li>
            <li class='list-group-item'><strong>ID Categoria:</strong> $obj->category_id</li>
        </ul>

        <div class='card-body'>
            <a href='$obj->permalink' target='_blank' class='card-link '>Link Mercado Livre</a>
        </div>

        </div>
    </div>        
    "?>

