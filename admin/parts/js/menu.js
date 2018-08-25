document.getElementById ("leftMenuAdd").addEventListener ('click', () => {
	if (
			document.getElementById ("leftMenuAddHidden").style.display === "block"
	) {
		document.getElementById ("leftMenuAddHidden").style.cssText = "display: none;";
		document.getElementById ("leftMenuEditHidden").style.cssText = "display: none;";
		document.getElementById ("leftMenuStatHidden").style.cssText = "display: none;";
		return;
	}
	document.getElementById ("leftMenuAddHidden").style.cssText = "display: block;";
	document.getElementById ("leftMenuEditHidden").style.cssText = "display: none;";
	document.getElementById ("leftMenuStatHidden").style.cssText = "display: none;";
});
document.getElementById ("leftMenuEdit").addEventListener ('click', () => {
	if (
			document.getElementById ("leftMenuEditHidden").style.display === "block"
	) {
		document.getElementById ("leftMenuAddHidden").style.cssText = "display: none;";
		document.getElementById ("leftMenuEditHidden").style.cssText = "display: none;";
		document.getElementById ("leftMenuStatHidden").style.cssText = "display: none;";
		return;
	}
	document.getElementById ("leftMenuAddHidden").style.cssText = "display: none;";
	document.getElementById ("leftMenuEditHidden").style.cssText = "display: block;";
	document.getElementById ("leftMenuStatHidden").style.cssText = "display: none;";
});
document.getElementById ("leftMenuStat").addEventListener ('click', () => {
	if (
			document.getElementById ("leftMenuStatHidden").style.display === "block"
	) {
		document.getElementById ("leftMenuAddHidden").style.cssText = "display: none;";
		document.getElementById ("leftMenuEditHidden").style.cssText = "display: none;";
		document.getElementById ("leftMenuStatHidden").style.cssText = "display: none;";
		return;
	}
	document.getElementById ("leftMenuAddHidden").style.cssText = "display: none;";
	document.getElementById ("leftMenuEditHidden").style.cssText = "display: none;";
	document.getElementById ("leftMenuStatHidden").style.cssText = "display: block;";
});
