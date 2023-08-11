note to self regarding Jonathan Bossenger gloabl vars check: /globals.php, /index.php, /themes/\*/create-block-them.php & 2023/templates/footer-default.php (most changes are only locally)

#Regarding the custom block
`npx @wordpress/create-block --variant dynamic hello-dolly-block`
Se [https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/)

While developing remember to use
`npm run start`

Compared to Nick Diegos video all the action is happening in render.php (not template.php)
https://www.youtube.com/watch?v=v00m1PaRaJ0

Note: If you want to give the editors options you can set that up in block.json.
But if you want to control the styles yourself - put it in style.scss. These styles are applied both for the frontend and backend (e.g. the dashboard)

(NTS: skipped the stuff around 53:58 about alignment etc., because perhaps the API has changed)
