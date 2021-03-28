import './page/multiple-products-list';

const { Module } = Shopware;

Module.register('multiple-products', {
    type: 'plugin',
    name: 'multipleProducts',
    title: 'Add Multiple Products To Cart',
    description: 'Add Multiple Products To Cart By Article At Once',
    color: '#ff3d58',
    icon: 'default-shopping-paper-bag-product',

    routes: {
        list: {
            component: 'multiple-products',
            path: 'list'
        }
    },

    navigation: [{
        label: 'Multiple products history',
        color: '#ff3d58',
        path: 'multiple.products.list',
        icon: 'default-shopping-paper-bag-product',
        position: 100
    }]
});
