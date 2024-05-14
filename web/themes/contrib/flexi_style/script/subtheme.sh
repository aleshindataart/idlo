#!/bin/bash
# Script to quickly create sub-theme.

echo '
+------------------------------------------------------------------------+
| With this script you could quickly create FlexiStyle Subtheme          |
| In order to use this:                                                  |
| - FlexiStyle theme (this folder) should be in the contrib folder       |
+------------------------------------------------------------------------+
'
echo 'The machine name of your custom theme? [e.g. mytheme_flexistyle]'
read CUSTOM_FLEXISTYLE

echo 'The theme name of your custom theme? [e.g. Mytheme FlexiStyle]'
read CUSTOM_FLEXISTYLE_NAME

if [[ ! -e ../../custom ]]; then
    mkdir ../../custom
fi
cp -r subtheme ../../custom/$CUSTOM_FLEXISTYLE
cd ../../custom/$CUSTOM_FLEXISTYLE

for file in *flexi_style_subtheme.*; do mv $file ${file//flexi_style_subtheme/$CUSTOM_FLEXISTYLE}; done
for file in config/*/*flexi_style_subtheme*.*; do mv $file ${file//flexi_style_subtheme/$CUSTOM_FLEXISTYLE}; done
mv {_,}$CUSTOM_FLEXISTYLE.theme
if [[ "$OSTYPE" == "darwin"* ]]; then
  grep -Rl flexi_style_subtheme .|xargs sed -i '' -e "s/flexi_style_subtheme/$CUSTOM_FLEXISTYLE/"
else
  grep -Rl flexi_style_subtheme .|xargs sed -i -e "s/flexi_style_subtheme/$CUSTOM_FLEXISTYLE/"
fi

sed -i -e "s/FlexiStyle Subtheme/$CUSTOM_FLEXISTYLE_NAME/" $CUSTOM_FLEXISTYLE.info.yml
echo "# Check the themes/custom folder for your new subtheme."
