<?php
/* Diese Datei erstellt eine Spalte mit Menüpunkten für die mobile Ansicht, welche innerhalb
einer Menü-Kategorie verwendet werden kann. */
?>
<div class="space-y-2">
    <nav class="flex flex-col gap-3">
        <?php foreach ($menuItems as $item) {
            snippet('menu/menu-item', $item);
        } ?>
    </nav>
</div>