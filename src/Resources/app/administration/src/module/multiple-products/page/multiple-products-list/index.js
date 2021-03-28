import template from './multiple-products-list.html.twig';

const { Component } = Shopware;
const { Criteria } = Shopware.Data;

Component.register('multiple-products-list', {
    template,

    inject: [
        'repositoryFactory'
    ],

    data() {
        return {
            repository: null,
            history: null
        };
    },

    metaInfo() {
        return {
            title: this.$createTitle()
        };
    },

    computed: {
        columns() {
            return [{
                property: 'sessionId',
                dataIndex: 'sessionId',
                label: 'Session id',
                allowResize: true,
                primary: true
            }, {
                property: 'article',
                dataIndex: 'article',
                label: 'Article',
                allowResize: true
            }, {
                property: 'quantity',
                dataIndex: 'quantity',
                label: 'Quantity',
                allowResize: true
            }];
        }
    },

    created() {
        this.repository = this.repositoryFactory.create('shohol_multiple_products');

        this.repository
            .search(new Criteria(), Shopware.Context.api)
            .then((result) => {
                this.history = result;
            });
    }
});
