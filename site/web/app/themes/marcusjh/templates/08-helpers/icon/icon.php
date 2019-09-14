<?Php
    if ( empty($name) ) $name = '';
    if ( empty($className) ) $className = '';
?>

<i class="icon icon--<?= $name; ?> <?= $className; ?>">
    <svg>
        <use class="no-barba pointer-events-none" xlink:href="#icon--<?= $name;?>"></use>
    </svg>
</i>