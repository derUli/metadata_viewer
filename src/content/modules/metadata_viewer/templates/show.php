<?php
$acl = new ACL();
if ($acl->hasPermission(getModuleMeta("metadata_viewer", "admin_permission")) and ViewBag::get("title") and ViewBag::get("content")) {
    ?><p>
	<a href="<?php echo ModuleHelper::buildAdminURL("metadata_viewer");?>"
		class="btn btn-default"><i class="fa fa-arrow-left"></i> <?php translate("back");?></a>
</p>
<h3><?php Template::escape(ViewBag::get("title"));?></h3>
<textarea class="codemirror" data-mimetype="application/json" readonly><?php Template::escape(ViewBag::get("content"));?></textarea>
<?php
} else {
    noperms();
}
