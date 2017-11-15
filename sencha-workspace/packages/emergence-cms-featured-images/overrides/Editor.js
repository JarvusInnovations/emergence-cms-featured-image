/*jslint browser: true, undef: true *//*global Ext*/
Ext.define('Emergence.cms.featured.images.overrides.Editor', {
    override: 'Emergence.cms.view.Editor',
    requires: [
        'Emergence.cms.featured.images.field.FeaturedImage'
    ],

    initComponent: function() {
        var editorView = this,
            featuredImageField = Ext.create('Emergence.cms.featured.images.field.FeaturedImage', {
                dock: 'top',
                hidden: false
            });

        editorView.on({
            syncfromrecord: function(editorView, contentRecord) {
                //featuredImageField.setValue(contentRecord.get('Summary'));
                //featuredImageField.setHidden(contentRecord.get('Class') != 'Emergence\\CMS\\BlogPost');
            },
            synctorecord: function(editorView, contentRecord) {
                //contentRecord.set('Summary', featuredImageField.getValue());
            }
        });

        editorView.callParent(arguments);

        editorView.addDocked(featuredImageField);
    }
});