export default function getLocalization(stringKey) {
  if (typeof window.airwptheme_screenReaderText === 'undefined' || typeof window.airwptheme_screenReaderText[stringKey] === 'undefined') {
    // eslint-disable-next-line no-console
    console.error(`Missing translation for ${stringKey}`);
    return '';
  }
  return window.airwptheme_screenReaderText[stringKey];
}
