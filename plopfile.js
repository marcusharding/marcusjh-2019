module.exports = function (plop) {
    // controller generator
    plop.setGenerator('component', {
        description: 'create a new component',
        prompts: [{
            type: 'input',
            name: 'component name',
            message: 'enter component name'
        }],
        actions: [{
            type: 'add',
            path: './site/web/app/themes/marcusjh/assets/src/templates/{{name}}.php',
            templateFile: './scaffold/component/template.php.hbs'
        }]
    });
};