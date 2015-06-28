jQuery(document).ready(function($) {
(function() {
    tinymce.PluginManager.add('bse_mce_button', function( editor, url ) {
        editor.addButton('bse_mce_button', {
            icon: 'bse-mce-icon',
            title : 'Brainesia Scroll Effect Shortcode', // title of the button
            onclick: function() {
                editor.windowManager.open( {
                    title: 'Insert Scroll Effect',
                    body: [
                            {
                                type: 'textbox',
                                name: 'class',
                                label: 'class (optional)',
                                value: '30'
                            },
                            {
                                type: 'textbox',
                                name: 'content',
                                label: 'Content',
                                value: 'Content Here',
                                multiline: true,
                                minWidth: 300,
                                minHeight: 100
                            },
                            {
                                type: 'listbox',
                                name: 'effect',
                                label: 'effect',
                                'values': [
                                    {text : 'Fade In Left', value : 'fadeInLeft'},
                                    {text : 'Fade In Up', value: 'fadeInUp'},
                                    {text : 'Rotate In Down Left', value : 'rotateInDownLeft'},
                                    {text : 'Rotate In Down Right', value : 'rotateInDownRight'},
                                    {text : 'Bounce In Left', value : 'bounceInLeft'},
                                    {text : 'Bounce In Right', value : 'bounceInRight'}
                                        ]
                            }
                    ],
                    onsubmit: function( e ) {
                            editor.insertContent( '[bse  class="' + e.data.class + '" effect="' + e.data.effect + '"]'+ e.data.content +'[/bse]');
                    }
                });
            }
        });
    });
})();
});
