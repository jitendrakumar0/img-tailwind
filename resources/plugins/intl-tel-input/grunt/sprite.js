module.exports = function(grunt) {
  return {
    retina: {
      src: 'src/img/flags/@2x/*.webp',
      dest: 'build/img/flags@2x.webp',
      destCss: 'tmp/sprite@2x.scss', // ignore - we just use the @1x styles for both
      padding: 4,
      algorithm: 'left-right',
      algorithmOpts: {
        sort: false
      },
      cssOpts: {
        variableNameTransforms: ['toLowerCase']
      }
    },
    main: {
      src: ['src/img/flags/@1x/*.webp'],
      dest: 'build/img/flags.webp',
      cssTemplate: 'grunt/tmpl/sprite.scss.mustache',
      destCss: 'src/css/sprite.scss',
      padding: 2, // this is currently just for chrome, otherwise flags seem to leak into each other
      algorithm: 'left-right',
      algorithmOpts: {
        sort: false
      },
      cssOpts: {
        variableNameTransforms: ['toLowerCase']
      }
    }
  };
};
