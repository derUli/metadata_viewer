<h3><?php translate("installed_modules")?></h3>
<?php $modules = getAllModules();?>
<ol>
<?php foreach($modules as $module){?>
<?php
    
    $file = ModuleHelper::buildModuleRessourcePath($module, "metadata.json");
    if (file_exists($file)) {
        ?>
	<li><a
		href="<?php echo ModuleHelper::buildActionURL("show_metadata", "sClass=MetadataViewer&sMethod=show&module=".Template::getEscape($module));?>"><i class="fas fa-eye"></i> <?php Template::escape($module);?></a></li>
	<?php }?>
<?php }?>
</ol>
<h3><?php translate("installed_designs");?></h3>
<?php $themes = getAllThemes();?>
<ol>
<?php foreach($themes as $theme){?>
<?php
    
    $file = getTemplateDirPath($theme) . "metadata.json";
    if (file_exists($file)) {
        ?>
	<li><a
		href="<?php echo ModuleHelper::buildActionURL("show_metadata", "sClass=MetadataViewer&sMethod=show&theme=".Template::getEscape($theme));?>"><i class="fas fa-eye"></i> <?php Template::escape($theme);?></a></li>
	<?php }?>
<?php }?>
</ol>

