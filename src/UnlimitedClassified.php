<?php

namespace Lejin\UnlimitedClassified;

class UnlimitedClassified
{
    public function getUnlimitedClassified($data, $parent_key, $child_key)
    {
        $data = array_column($data, null, 'id');
        $tree = [];
        foreach ($data as $key => $val) {
            if ($val[$parent_key] == 0) {
                $tree[] = &$data[$key];
            } else {
                $data[$val[$parent_key]][$child_key][] = &$data[$key];
            }
        }
        return $tree;
    }
}
