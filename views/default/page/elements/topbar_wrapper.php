<?php
/**
 * Elgg topbar wrapper
 * Check if the user is logged in and display a topbar
 * @since 1.10 
 */
$site = elgg_get_site_entity();
$data['site_name'] = $site->description;
$data['site_url'] = elgg_get_site_url();

$twig = elgg_twig();


if (!elgg_is_logged_in()) {
	echo $twig->render('layouts/header_banner.html.twig', 
    [
        'data' => $data,
    ]);
	return true;
}

?>
<div class="elgg-page-topbar">
	<div class="elgg-inner">
		<?php
		echo elgg_view('page/elements/topbar', $vars);
		?>
	</div>
</div>

<?php
echo $twig->render('layouts/header_banner.html.twig', 
[
	'data' => $data,
]);
?>