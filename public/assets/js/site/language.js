/**
 * Created by Osvaldo on 23/08/2026.
 */
// load a locale
numeral.register('locale', 'pt-br', {
    delimiters: {
        thousands: ' ',
        decimal: ','
    },
    abbreviations: {
        thousand: 'k',
        million: 'm',
        billion: 'b',
        trillion: 't'
    },
    ordinal : function (number) {
        return number === 1 ? 'er' : 'ème';
    },
    currency: {
        symbol: 'R$ '
    }
});

// switch between locales
// numeral.locale('fr');
