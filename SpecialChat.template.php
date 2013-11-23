<?php
/**
 * @file
 */
if ( !defined( 'MEDIAWIKI' ) ) {
	die();
}

/**
 * Main user interface for Special:Chat.
 *
 * @ingroup Templates
 */
class SpecialChatTemplate extends QuickTemplate {
	public function execute() {
?>
		<div id="mwchat-container">
			<div id="mwchat-main">
				<div id="mwchat-content">
					<table id="mwchat-table"></table>
				</div>
				<div id="mwchat-type">
					<input type="text" placeholder="<?php echo wfMessage( 'chat-type-your-message' )->plain() ?>" />
				</div>
			</div>
			<div id="mwchat-users"></div>
			<div id="mwchat-me">
				<img src="" alt="" />
				<span class="mwchat-useritem-user"></span>
			</div>
		</div>
<?php
	} // execute()
} // class