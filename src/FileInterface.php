<?php
namespace TJ\Uploader;

interface FileInterface
{
    /**
     * Данные о загруженной картинке
     * @return array
     */
    public function getData();

    /**
     * Ссылка на картинку
     * @return string
     */
    public function getUrl();

    /**
     * Размер картинки (в байтах, если можно узнать)
     * @return integer|null
     */
    public function getSize();
}
