<?php

namespace MicroweberPackages\Template\Big\tests\Browser;

use Illuminate\Support\Facades\Auth;
use Laravel\Dusk\Browser;
use MicroweberPackages\User\Models\User;
use Tests\Browser\Components\AdminLogin;
use Tests\DuskTestCase;

class TemplateBigLiveEditTemplateTest extends DuskTestCase
{
    public $template_name = 'template-big';

    public function bootTemplate()
    {
        if (defined('TEMPLATE_DIR') == false) {
            define('TEMPLATE_DIR', templates_path() . $this->template_name . DS);
        }

        app()->template_manager->boot_template();

        save_option('current_template', $this->template_name,'template');
    }

    public function testCreateScreenshots()
    {

        $this->bootTemplate();

        $layouts = module_templates('layouts');

        $this->browse(function (Browser $browser) use($layouts) {

            foreach ($layouts as $layout) {

                if (!isset($layout['screenshot_file'])) {
                    dump($layout);
                    continue;
                }

                $layoutName = $layout['layout_file'];
                $layoutName = str_replace('.php', '', $layoutName);

//                $skip = true;
//                if (strpos($layoutName, 'testimonials') !== false) {
//                    $skip = false;
//                }
//                if ($skip) {
//                    continue;
//                }

                if (strpos($layoutName, 'header') !== false) {
                    $browser->resize(1200, 600);
                }
                if (strpos($layoutName, 'gallery') !== false) {
                    $browser->resize(1200, 1100);
                }
                if (strpos($layoutName, 'footer') !== false) {
                    $browser->resize(1200, 600);
                }
                if (strpos($layoutName, 'animated') !== false) {
                    $browser->resize(1200, 600);
                }
                if (strpos($layoutName, 'content') !== false) {
                    $browser->resize(1200, 960);
                }
                if (strpos($layoutName, 'contacts') !== false) {
                    $browser->resize(1200, 1500);
                }

                try {
                    $browser->visit('/preview-layout?layout=' . $layoutName . '&no_editmode=1');
                    $browser->waitFor('#preview-layout-file');

//                    $previewPath = template_dir() . 'assets/layouts-preview/' . $layoutName;
//                    if (!is_dir($previewPath)) {
//                        mkdir_recursive($previewPath);
//                    }
//
//                    $previewLayoutContentElement = $browser->element('#preview-layout-file');
//                    $layoutHtml = $previewLayoutContentElement->getDomProperty('innerHTML');
//
//                    $dom = new \DOMDocument();
//                    $dom->strictErrorChecking = false;
//                    $dom->loadHTML($layoutHtml);
//                    $images = $dom->getElementsByTagName('img');
//                    foreach ($images as $image) {
//                        $src = $image->getAttribute('src');
//
//                        $isImage = false;
//                        if (strpos($src, 'thumbnails') !== false) {
//                            $isImage = true;
//                        }
//                        if (strpos($src, 'api/image-generate-tn') !== false) {
//                            $isImage = true;
//                        }
//
//                        if ($isImage) {
//                            $imageContent = file_get_contents($src);
//                            $newImageFile = $previewPath . '/' . basename($src);
//
//                            file_put_contents($newImageFile, $imageContent);
//
//                            $previewPathPublicUrl = template_url() . 'assets/layouts-preview/' . $layoutName;
//                            $publicImageFile = $previewPathPublicUrl . '/' . basename($src);
//
//                            $image->setAttribute('src', $publicImageFile);
//                        }
//                    }
//
//                    $getBodyElement = $dom->getElementsByTagName('body');
//                    $layoutHtml = $dom->saveHTML($getBodyElement->item(0));
//
//                    $layoutHtml = str_replace('{SITE_URL}', site_url(), $layoutHtml);
//                    $layoutHtml = str_replace('<body>', '', $layoutHtml);
//                    $layoutHtml = str_replace('</body>', '', $layoutHtml);
//
//                    file_put_contents($previewPath . '/preview.html', $layoutHtml);


                    try {
                        $previewLayoutContentElement = $browser->element('#preview-layout-file');
                        $previewLayoutContentElement->takeElementScreenshot($layout['screenshot_file']);
                    } catch (\Exception $e) {
                        //dump($e->getMessage());
                    }

                } catch (\Exception $e) {
                    //dump($e->getMessage());
                }
            }
        });

    }

}
