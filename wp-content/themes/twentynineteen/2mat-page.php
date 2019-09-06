<?php /* Template Name: Mat Page2 */

get_header();

?>
<div class="container">
<div class="studio-list"></div>
</div>

<script>
    const url = 'https://api.myjson.com/bins/1b83qt';
    const studioContainer = document.querySelector('.studio-list');

    fetch(url)
    .then(response => response.json())
    .then(data => {
    (console.log(data))
        data.map( partner => {
            const content = 
            `
            <ul style="list-style-type:none;" class="list-style">
            <li>
            <h4><a href="${partner.url}">${partner.location}</a></h4>
            <p>${partner.studio}</p>
            ${partner.classdates}
            </li>
            </ul>
            `

            studioContainer.innerHTML += content;
        })
    });

</script>

<?php
