const fs = require('fs');
const path = require('path');

function findMissingTranslations() {
    const glob = require('glob');
    const files = glob.sync('resources/views/**/*.blade.php');
    let keys = new Set();
    const regex = /__\(\s*['"](.*?)['"]\s*\)/g;
    
    files.forEach(file => {
        const content = fs.readFileSync(file, 'utf8');
        let match;
        while ((match = regex.exec(content)) !== null) {
            keys.add(match[1]);
        }
    });
    
    const ja = require('./lang/ja.json');
    const missing = Array.from(keys).filter(key => !(key in ja));
    console.log('Missing keys in ja.json:');
    console.log(JSON.stringify(missing, null, 2));
}
findMissingTranslations();
