# Set this to the root of your project when deployed:

http_path       = "/"
css_dir         = "css"
sass_dir        = "scss"
images_dir      = "img"
javascripts_dir = "js"

    environment = :development
#   environment = :production

if  environment == :production
    output_style = :compressed
else
    output_style =   :expanded
#    sass_options = { :debug_info => true }
end

# To enable relative paths to assets via compass helper functions. Uncomment:

relative_assets = true
line_comments   = false
color_output    = false

# Réaliser une copie des sprites avec un nom dépourvu du hash d'unicité.

on_sprite_saved do |filename|
    if File.exists?(filename)
        FileUtils.cp filename, filename.gsub(%r{-s[a-z0-9]{10}\.png$}, '.png')
    end
end
 
# Remplacer dans les feuilles de styles générés les références aux sprites par
# leurs équivalents dépourvus du hash d'unicité.

on_stylesheet_saved do |filename|
    if File.exists?(filename)
        css = File.read filename
        File.open(filename, 'w+') do |f|
            f << css.gsub(%r{-s[a-z0-9]{10}\.png}, '.png')
        end
    end
end