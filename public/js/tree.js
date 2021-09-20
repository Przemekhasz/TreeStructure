$.fn.extend({
    treed: function (o) {
        let openedClass = "";
        let closedClass = "";

        if (typeof o != "undefined") {
            if (typeof o.openedClass != "undefined") {
                openedClass = o.openedClass;
            }
            if (typeof o.closedClass != "undefined") {
                closedClass = o.closedClass;
            }
        }

        /* initialize each of the top levels */
        let tree = $(this);
        tree.addClass("tree");
    },
});
/* Initialization of treeviews */
$("#tree1").treed();
