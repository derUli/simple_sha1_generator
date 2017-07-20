<?php

class SimpleSHA1Generator extends Controller
{

    private $moduleName = "simple_sha1_generator";

    public function getSettingsHeadline()
    {
        return get_translation("simple_sha1_generator");
    }

    public function getSettingsLinkText()
    {
        return get_translation("open");
    }

    public function settings()
    {
        if (! is_null(Request::getVar("text"))) {
            ViewBag::set("result", sha1(Request::getVar("text")));
        }
        return Template::executeModuleTemplate($this->moduleName, "form");
    }
}