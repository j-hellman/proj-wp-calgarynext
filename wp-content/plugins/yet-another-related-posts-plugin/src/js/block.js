(function (blocks, i18n, element, components, editor, blockEditor) {
	var el = element.createElement;
	const { registerBlockType } = blocks;
	const { __ } = i18n; //translation functions
	const iconEl = el('img', {
		src: 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMTQ1cHgiIGhlaWdodD0iMTkxcHgiIHZpZXdCb3g9IjAgMCAxNDUgMTkxIiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCA0OC4yICg0NzMyNykgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+bWFyazwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxkZWZzPjwvZGVmcz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIGlkPSJtYXJrIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxLjAwMDAwMCwgMC4wMDAwMDApIiBmaWxsPSIjMDAwMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iPgogICAgICAgICAgICA8ZyBpZD0iY29mZmVlIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg3MS41MDAwMDAsIDEyMC43MDM3MDQpIHNjYWxlKC0xLCAxKSByb3RhdGUoLTE4MC4wMDAwMDApIHRyYW5zbGF0ZSgtNzEuNTAwMDAwLCAtMTIwLjcwMzcwNCkgdHJhbnNsYXRlKDAuMDAwMDAwLCA1MS43MDM3MDQpIj4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik00Mi44NjA1NzA2LDEzNi4wODIyOCBDMzIuODM4MzcwNSwxMzQuNzgzMzg4IDI1LjQ2Njk2OTcsMTMyLjg5OTk5NyAyMC43NDYzNjgxLDEzMC40MzIxMDMgTDE3LjM2OTMyMjUsMTI3LjgwMTg0OSBMMTcuNjk2MTMzMywxMTMuMjg2NzM4IEMxNy45MTQwMDcyLDk5LjM1NjEyOTIgMTcuOTE0MDA3Miw5OC42NzQyMTEzIDE1LjYyNjMzMSw5Ni44MjMyOTEyIEM5Ljg1MjY3MjI5LDkyLjE0NzI4MjcgMCw3OS4yNjM5ODU1IDAsNjguNTQ4MTMyNSBDMCw2My4xOTAyMDYgMS41NTkxMDc0Myw2MC4wNjIyODM2IDQuODI3MjE2MTksNTQuNDEyMTA2NiBDNy4wMDU5NTUzNSw1MC44MDc2ODMzIDEzLjUyNDk3MDMsNDUuNTM3MDMzNCAxNC43MjMyNzY5LDQ0LjU2Mjg2NDkgQzE3LjAxMDk1MjksNDMuMDA0MTk1MyAxOC40NTg2OTE5LDQ0LjEzMDMxMzggMTcuNjk2MTMzMywzMy4xMjIyMTAyIEMxNi44MjQ2Mzc2LDE5LjM4NjQzNSAxNi4wNjIwNzg5LDE3LjQyODU2MjEgMjQuMDE0NDc2OCwxMi44NDk5NzAzIEMzNC43OTkyMzU4LDYuNjE1MjkyMTkgNDIuNzUxNjMzNywzLjU5NTM2OTk3IDUyLjc3MzgzMzksMS43NDQ0NDk5IEM3Ni42MzEwMjc3LC0yLjQ0NDQ3NDQ2IDExMy4zNDI3ODMsMS4yNTczNjU2OCAxMjYuMzA2MjgsOS4xNDgxMzAxNyBDMTMzLjkzMTg2OCwxMy45MjE1NTU2IDEzNi41NDYzNTUsMTYuODQ0MDYxIDEzNi41NDYzNTUsMjAuOTM1NTY4NCBDMTQwLjQ2ODA4NSw4Ny44OTM0MTM3IDE0Mi41Mzc4ODgsMTIxLjg1OTQyIDE0Mi43NTU3NjEsMTIyLjgzMzU4OSBDMTQzLjE5MTUwOSwxMjUuMDc0MTc3IDE0Mi43NTU3NjEsMTI1LjY1ODY3NyAxMzkuMTYwODQyLDEyNy4zMTQ3NjQgQzEzNC4wNDA4MDQsMTI5LjY1Mjc2OSAxMjcuODMxMzk4LDEzMC44MjE3NzEgMTA2LjU4ODY5MSwxMzMuMzU0NjA5IEM5Ny42NTU4NjA3LDEzNC40MjYxOTQgODcuMDg4OTc1OCwxMzUuNjkyNjEzIDgzLjE2NzI0NTIsMTM2LjI3NzExNCBDNzQuNTYxMjI1NSwxMzcuNDQ2MTE2IDUyLjU1NTk2LDEzNy4zNDg2OTkgNDIuODYwNTcwNiwxMzYuMDgyMjggWiBNODQuNTMwMjczNCwxMzIuMDc4NzA0IEM5MC4yMzM4MTY3LDEzMS4zODQ4NTYgOTkuMDk4MzIxMywxMzAuMjUwMDg2IDEwOS4wMzgwODYsMTI5LjE5MzQ1IEMxMjMuMjY5NTg5LDEyNy4wMjU1MDQgMTM1LjQxOTkwMSwxMjUuNjI2MzMxIDEzNi4wNTI0MTMsMTIzLjMzMDg1OSBDMTM2LjI2MzI1LDEyMi42OTMyMjggMTIzLjkzNDI5NSwxMjAuOTc0MjM5IDEyMC4zNTAwNjQsMTE5LjgyNjUwMyBDMTE0LjEzMDM3MSwxMTcuNzg2MDg0IDEwMi4yODI2OTYsMTIwLjE4NTg4MSA5MC4zNzQ5MTk3LDEyMi40MTM1NjMgQzc4LjUwNDkyOTIsMTI0LjYzNDE3NSA2NS40NTYzNDA4LDEyMy4zMzA4NTkgNTcuMjU0NTk4NywxMjMuMzMwODU5IEM1Ny4yNTQ1OTg3LDEyMy4zMzA4NTkgNTIuNDc1NDQ2NiwxMjIuNTIzMTkzIDQyLjkxNzE0MjUsMTIwLjkwNzg2MSBDMzQuODc2MDMxNiwxMTkuNTQ4OTMxIDM2LjIyMTA1NjEsMTE5LjEyMjQ5NCAzMC4wMDEzNjIyLDEyMS44MDA1NDUgQzI2LjQxNzEzMTksMTIzLjQ1ODM4NSAyMy4yNTQ1NzU3LDEyNS4yNDM3NTIgMjMuMTQ5MTU3MiwxMjYuMDA4OTEgQzIzLjE0OTE1NzIsMTI2LjY0NjU0MSAyMy40NDM2MjM4LDEyOC40NjE1MjIgMjYuNDE3MTMxOSwxMjkuOTYyMjIxIEMzMC43NTg3ODkxLDEzMi4xNTM0MTEgNDMuNTE0MTYwMiwxMzIuNDQxMDA4IDU0LjcxNDM1NTUsMTMyLjk4NzM5NSBDNjMuNDg1ODM5OCwxMzIuOTg3Mzk1IDc4LjgyNjczMDEsMTMyLjc3MjU1MSA4NC41MzAyNzM0LDEzMi4wNzg3MDQgWiBNMzkuODcwNjc2MSwxMTYuNzY2ODQ0IEM0NC4xMjY4ODU2LDExNS43MjU4NzYgNTMuNjc3NDA0MSwxMTQuMjExNzQgNjEuMTUxNzIyOCwxMTMuMzYwMDM4IEM3OC43OTk0MjAxLDExMS4zNzI3MzQgMTM0Ljk2MDYyMSwxMTkuNTExMjE1IDEzNS4xNjgyNDEsMTE5LjIyNzMxNSBDMTM1LjM3NTg2MSwxMTkuMDM4MDQ5IDEzNC40NDE1NzEsNTQuMTE5NDYyNSAxMzEuMzI3MjcyLDI5LjcwNDAxNzcgQzEyOS44NzM5MzIsMTguOTE1Nzk3OCAxMjkuMzU0ODgyLDE3Ljk2OTQ2MjcgMTIyLjA4ODE4MywxMy40MjcwNTQ0IEMxMTAuNDYxNDY1LDYuMDQ1NjQwODQgNzQuNTQzMjEwNywyLjczMzQ2ODA4IDUzLjM2NTk3NCw2Ljk5MTk3NTkgQzQyLjk4NDk3NTcsOS4wNzM5MTMwNyAzNi43NTYzNzY3LDExLjcyMzY1MTMgMjcuNDEzNDc4MSwxNy42ODU1NjIzIEwyMi4yODExNjk0LDIxLjU4ODA4NTQgTDIzLjU3MjUwODgsMTIxLjMwOTI1MyBMMzkuODcwNjc2MSwxMTYuNzY2ODQ0IFogTTE3LjU5OTcwNDMsNjUuODAxMzgyMSBDMTcuNTk5NzA0Myw1MC44MjAwMDIzIDE4LjE3MDY1OTIsNTAuNzUyOTc1MyAxNy41OTk3MDQzLDUwLjc1Mjk3NTMgQzE0LjIyNTgzNzcsNTAuNzUyOTc1MyAxMC42ODY5OTQ2LDUzLjIwODYyOTYgNy45MzM0NTE3Miw1Ny42NDI4NTY0IEM1LjgxMDQ2NjgsNjEuMDYxNjUwNyA1LjUwMzQ2MTY2LDY1LjYzMDE2MjggNS41MDM0NjE2Niw2Ny4yMjgwNzE0IEM1LjUwMzQ2MTY2LDc4LjAyNjAyMTMgMTAuODY3NjAxOCw4Ni41MTAxNTI1IDE3LjU5OTcwNDMsODYuNTEwMTUyNSBDMTcuNTk5NzA0Myw4Ni41MTAxNTI1IDE3LjU5OTcwNDMsNzkuNjA3MjI5IDE3LjU5OTcwNDMsNjUuODAxMzgyMSBaIiBpZD0ibXVnIiBzdHJva2U9IiMwMDAwMDAiPjwvcGF0aD4KICAgICAgICAgICAgICAgIDxnIGlkPSJGYWNlIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1MC45NDI4NTAsIDYwLjQwMDc5NykiPgogICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik02Mi4xNjA3NzgsMzMuNTQ3NTgzNSBDNTguNDA4MjI2MiwyNi42MDQxNTMzIDYwLjExMzkzMTYsMTkuMDI5NTAyMiA2NC44ODk5MDY2LDE5LjAyOTUwMjIgQzY3LjYxOTAzNTMsMTkuMDI5NTAyMiA3MC42ODkzMDQ5LDIxLjU1NDM4NiA3MS43MTI3MjgyLDI0LjcxMDQ5MDYgQzc0LjEwMDcxNTcsMzEuMDIyNjk5OSA2NS4yMzEwNDc4LDM5LjIyODU3MTggNjIuMTYwNzc4LDMzLjU0NzU4MzUgWiIgaWQ9IlNoYXBlIj48L3BhdGg+CiAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTIuMTAzMDM4MzcsMzQuMDA2MTkwNiBDLTEuNjQ5NTEzNDksMjcuMDYyNzYwMyAwLjA1NjE5MTkwMTksMTkuNDg4MTA5MiA0LjgzMjE2NywxOS40ODgxMDkyIEM3LjU2MTI5NTYzLDE5LjQ4ODEwOTIgMTAuNjMxNTY1MywyMi4wMTI5OTI5IDExLjY1NDk4ODUsMjUuMTY5MDk3NiBDMTQuMDQyOTc2MSwzMS40ODEzMDY4IDUuMTczMzA4MDgsMzkuNjg3MTc4OSAyLjEwMzAzODM3LDM0LjAwNjE5MDYgWiIgaWQ9IlNoYXBlIj48L3BhdGg+CiAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTMxLjI3NDQ0ODEsMTMuNDg2Nzc4OCBDMjIuMzUyNjcyOCw5Ljc1NzE4ODQ0IDIyLjM1MjY3MjgsNi44NTYzOTU5NyAzMS42OTkyOTQ2LDIuOTE5NjA2MTggQzQyLjEwODAzMjQsLTEuMjI0MzgzMDcgNTQuNjQxMDAyNSwtMC44MDk5ODQxNDcgNTkuMTAxODkwMiwzLjc0ODQwNDAzIEM2Mi4yODgyMzg1LDcuNDc3OTk0MzUgNjIuMjg4MjM4NSw3Ljg5MjM5MzI4IDU4Ljg4OTQ2NjksMTAuNzkzMTg1OCBDNTMuMTU0MDM5OSwxNS43NjU5NzI5IDM5LjM0NjUzMDUsMTcuMDA5MTY5NiAzMS4yNzQ0NDgxLDEzLjQ4Njc3ODggWiBNMzQuOTc2NzUxLDcuOTA3NDgwOTMgQzMxLjkwMDc0OTksMTAuMTEwNDkzNyAzNi42OTIxOTYxLDEwLjMyOTQyNTggNDQuNzk0NzQwOCw5LjkxNzg4MDc4IEM1Ni4wMTA3NjU5LDkuMjAxOTk3NDEgNTYuMTM5MTMwOSw0LjQyOTQzMDIxIDQ0LjcxMDU0MzIsNC45MTI0NDYyMyBDMzkuOTU1OTI2OCw1LjA0NDI5NDI5IDM1Ljc0NTc1MTMsNy4zNTY3Mjc3NSAzNC45NzY3NTEsNy45MDc0ODA5MyBaIiBpZD0iU2hhcGUiPjwvcGF0aD4KICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8ZyBpZD0iU3RlYW0iIHRyYW5zZm9ybT0idHJhbnNsYXRlKDU5LjAwMDAwMCwgMC4wMDAwMDApIj4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik00LjE2MDcyNzYzLDAgQzMuODM3ODQ1OSwyLjYzMDYwNzA1IDMuNjM2ODk2NjIsNS4zMDMwNTE1OSAzLjU1OTg2MzAyLDcuOTkwOTU4NDEgQzMuNTAzOTksMTEuNzQ3MDY3OSA0LjM0NTcxNTczLDE1LjM3MjE2MjYgNS44ODAxMjQ4MywxNy45ODM3MjUxIEM2Ljg5MDgwOTkzLDE5Ljc5NTY2IDcuODk1MzMyMywyMS42MjM4Njk4IDguODkzNjkxOTYsMjMuNDY4MzU0NCBDOS45NDgxNjY2MywyNS4zNTQ0ODk1IDEwLjY1MTEyNjEsMjcuNzYxNTg3NSAxMC45MDg4OTk0LDMwLjM2ODg5NjkgQzExLjIxOTk2NDQsMzMuNTA1NjYyMyAxMC43MjU3NDQzLDM2LjcyMzg3OTUgOS41NTkyNjUwOCwzOS4xNTczMjM3IEM4LjMyNzMwNjcyLDQxLjc4NjcwODYgNi42NzAxMDYxOCw0My42OTM5NDg1IDQuODA3ODEyNiw0NC42MjU2NzgxIEw0LjE2MDcyNzYzLDQ1IEM0LjU0ODk3ODYyLDQzLjc5NTY2IDQuOTE4NzQxNDUsNDIuNjg4OTY5MiA1LjI2MDc3MjA4LDQxLjU2NjAwMzYgQzUuNzIyOTc1NjMsNDAuMDUyNDQxMiA2LjE4NTE3OTE3LDM4LjUzODg3ODkgNi42MTA0MDY0NCwzNi45NzY0OTE5IEM3LjEwOTgxODQzLDM1LjIzMjYwNTYgNy4wNTAwOTQzNCwzMy4xNTQzNzM1IDYuNDUzMjU3MjMsMzEuNTA4MTM3NCBDNi4yMjkzNzk3LDMwLjkyMTQxNDkgNS45NzIzMTQ0NiwzMC4zNzYxMzUxIDUuNjg1OTk5MzQsMjkuODgwNjUxIEM0LjY2OTE1MTUzLDI4LjA0MTU5MTQgMy42MjQ1NzE1MiwyNi4yNjc2MzExIDIuNjM1NDU1OTIsMjQuNDEyMjk2NiBDMS40NTE3ODQ1NCwyMi4yNjgxOTg3IDAuNjIzODI5MjUsMTkuNTk0ODU0NyAwLjI0MTI0MTU0MiwxNi42ODE3MzYgQy0wLjQzODk4OTM5NiwxMS43NzA5NzU3IDAuMzQwNTA0MzQyLDYuNTg3ODgxNzIgMi4zMTE5MTM0MywyLjkxMzIwMDczIEMyLjc2NDg3MjkxLDIuMDE4MDgzMTkgMy4zMDEwMjkwMywxLjI4NTcxNDI5IDMuODAwMjA4ODcsMC40NTU2OTYyMDIgTDQuMDY4Mjg2OTIsNS4wNTkyNDQxNmUtMTUgTDQuMTYwNzI3NjMsMCBaIiBpZD0iU2hhcGUiPjwvcGF0aD4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik00MiwyMi4yNzg0MzM1IEM0MS41MDg3NTY2LDIzLjI0Nzc0OCA0MS4wMzY3Nzc2LDI0LjE3NTUyMDUgNDAuNTU1MTY2NCwyNS4xNTg2ODIzIEM0MC4xODQ1MjQ5LDI1Ljk1MjczODQgMzkuODYyMjU0NSwyNi43OTEzMDc5IDM5LjU5MTk0NCwyNy42NjUwNTI4IEMzOS4yOTU2OTQzLDI4Ljg5MjY3NTUgMzkuMjI5MjU3MSwzMC4yMTA3MjI5IDM5LjM5OTI5OTQsMzEuNDg2OTIxNCBDMzkuNTQzNzgyOSwzMy40MjU1NTA0IDM5LjcyNjc5NTEsMzUuMzY0MTc5NSAzOS44MDM4NTI5LDM3LjMwMjgwODUgQzM5Ljg1NjMxMzIsMzguOTU2Nzk5MyAzOS41MTY3MTU1LDQwLjU4NzQxNCAzOC44NDA2MzA1LDQxLjkyNzgyMzUgQzM4LjAxMDUwMjcsNDMuNjk1MDc1NCAzNi42NjAyMTU1LDQ0LjgxMzgwOTIgMzUuMTgwMzg1Myw0NC45NjAzOTMyIEMzMy43MjAwMDUsNDUuMTQ4NDYwOCAzMi4yNTU4ODU1LDQ0LjY2MzQ3NzQgMzEsNDMuNTc1NjU4MSBMMzEuMTM0ODUxMSw0My40MDk0ODk5IEMzMi4wOTgwNzM2LDQyLjQ5NTU2NDkgMzMuMTI4NzIxNSw0MS41OTU0ODcxIDM0LjEwMTU3NjIsNDAuNjQwMDE5OSBDMzQuNzYwMzc3MSw0MC4wNjgxMTA0IDM1LjA3ODA5MzUsMzguOTQwMzI5NiAzNC44ODE3ODYzLDM3Ljg3MDU0OTkgQzM0LjUzOTkyMDgsMzUuNTA3MDY1NyAzNC4zNzUyMzI1LDMzLjA5NzcxNjYgMzQuMzkwNTQzLDMwLjY4Mzc3NSBDMzQuNTUzMDI0NywyNi4zNjI2MjcyIDM2Ljc5MjQzMTgsMjIuNzkxMzAwNCAzOS43NjUzMjQsMjIuMTEyMjY1MyBDNDAuNDE5NDA4MSwyMS45NjI1NzgyIDQxLjA4NTg0NTcsMjEuOTYyNTc4MiA0MS43Mzk5Mjk5LDIyLjExMjI2NTMgTDQxLjg4NDQxMzQsMjIuMTEyMjY1MyBMNDIsMjIuMjc4NDMzNSBaIiBpZD0iU2hhcGUiPjwvcGF0aD4KICAgICAgICAgICAgPC9nPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+',
	});
	var ServerSideRender = wp.serverSideRender;
	const { RichText, InspectorControls } = blockEditor;
	const {
		TextControl,
		CheckboxControl,
		RadioControl,
		SelectControl,
		TextareaControl,
		ToggleControl,
		RangeControl,
		Panel,
		PanelBody,
		PanelRow,
	} = components;

	registerBlockType('yarpp/yarpp-block', {
		title: __('YARPP Block', 'yarpp'),
		description: __('Display related posts by YARPP', 'yarpp'),
		category: 'yarpp',
		icon: iconEl,
		keywords: [
			__('yarpp', 'yarpp'),
			__('related posts', 'yarpp'),
			__('posts', 'yarpp'),
		],
		supports: {
			html: false,
		},

		attributes: {
			limit: {
				type: 'number',
				default: 6,
			},
			template: {
				type: 'string',
				default: yarpp_localized.selected_theme_style,
			},
			yarpp_preview: {
				type: 'string',
			},
		},
		example: {
			attributes: {
				yarpp_preview: 'yarpp_preview',
			},
		},
		edit: function (props) {
			const attributes = props.attributes;
			const setAttributes = props.setAttributes;
			var template = Object.keys(yarpp_localized.template).map(function (key) {
				return { value: key, label: yarpp_localized.template[key] };
			});

			if (props.isSelected) {
				//	console.debug(props.attributes);
			}

			// Functions to update attributes.
			function changeThumbnail(template) {
				setAttributes({ template });
			}

			return [
				/**
				 * Server side render
				 */
				el(
					'div',
					{ className: props.className },
					el(ServerSideRender, {
						block: 'yarpp/yarpp-block',
						attributes: attributes,
					}),
				),

				/**
				 * Inspector
				 */
				el(
					InspectorControls,
					{},
					el(
						PanelBody,
						{ title: 'YARPP Posts Settings', initialOpen: true },

						el(TextControl, {
							label: __('Maximum number of posts', 'yarpp'),
							value: attributes.limit,
							onChange: function (val) {
								setAttributes({ limit: parseInt(val) });
							},
							type: 'number',
							min: 1,
							step: 1,
						}),
						el(SelectControl, {
							value: attributes.template,
							label: __('Theme', 'yarpp'),
							onChange: changeThumbnail,
							options: template,
						}),
					),
				),
			];
		},

		save() {
			return null; //save has to exist. This all we need
		},
	});
})(
	window.wp.blocks,
	window.wp.i18n,
	window.wp.element,
	window.wp.components,
	window.wp.editor,
	window.wp.blockEditor,
	window.wp.serverSideRender,
);
