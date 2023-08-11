note to self regarding Jonathan Bossenger gloabl vars check: /globals.php, /index.php, /themes/\*/create-block-them.php & 2023/templates/footer-default.php

#Regarding the custom block
`npx @wordpress/create-block --variant dynamic hello-dolly-block`
Se [https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/)

While developing use

`npm run start`

Compared to Nick Diegos video all the action is happening in render.php (not template.php)

Note: If you want to give the editors options you can set that up in block.json.
But if you want to control the styles yourself - put it in style.scss. These styles are applied both for the frontend and backend (e.g. the dashboard)
