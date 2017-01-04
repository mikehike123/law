$(function() {

    //Wait for Pinegrow to wake-up
    $("body").one("pinegrow-ready", function(e, pinegrow) {

        //Create new Pinegrow framework object
        var f = new PgFramework("MyBlocks", "MyBlocks");

        //This will prevent activating multiple versions of this framework being loaded
        f.type = "MyBlocks";
        f.allow_single_type = true;
        f.user_lib = true

        var comp_comp1 = new PgComponentType('comp1', 'Paragraph with Header');
        comp_comp1.code = '<section id="content-3-7" class="content-block content-3-7 simpleHeader" wp-cz-section="blocks_content_3_7" wp-cz-section-title="About Us Title" title="About Us WP" data-pg-name="About Us WP" wp-cz-control>\
    <div class="container">\
        <div class="col-sm-12">\
            <div class="underlined-title">\
                <h1 wp-cz-control="blocks_content_3_7_title" wp-cz-control-label="Title" wp-cz-control-section="blocks_content_3_7" wp-cz-theme-mod="blocks_content_3_7_title">About Us</h1>\
                <hr>\
            </div>\
        </div>\
        <div class="col-lg-12 col-md-12 col-sm-12">\
            <p wp-cz-control="blocks_content_3_7_text" wp-cz-control-label="Text" wp-cz-control-section="blocks_content_3_7" wp-cz-theme-mod="blocks_content_1_5_text" wp-cz-control-type="textarea">Lorem ipsum dolor sit amet, quis lacinia cras enim luctus platea tortor. Massa vitae at mauris turpis eget rhoncus, mollis congue sodales in vitae egestas, fringilla eu mauris orci condimentum integer purus, lectus in ullamcorper imperdiet,\
                nec amet vestibulum nostra cras leo. Diam mauris sit, tortor a consequat erat elit. Sit eu egestas arcu nec felis consectetuer. Sunt ullamcorper proin, mauris viverra excepteur quis dictum torquent. Augue elit metus dui mattis a urna.\
                Nisl dictum dui vitae velit pede, per tincidunt pede mauris nonummy, morbi in vivamus sollicitudin eleifend. Vehicula magna nunc sit, semper mauris, neque id sit maecenas convallis dignissim. Lobortis donec vel orci dui, ad at at varius.\
                Imperdiet at volutpat maecenas nonummy sit. Amet id id in magna scelerisque, justo ultrices ut suscipit, est neque dolor etiam turpis. Neque consectetuer eget, vitae vivamus magna libero aliquam.</p>\
        </div>\
    </div>\
</section>';
        comp_comp1.parent_selector = 'body';
        f.addComponentType(comp_comp1);
        
        //Tell Pinegrow about the framework
        pinegrow.addFramework(f);
            
        var section = new PgFrameworkLibSection("MyBlocks_lib", "Components");
        //Pass components in array
        section.setComponentTypes([comp_comp1]);

        f.addLibSection(section);
   });
});