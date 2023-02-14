<?php

namespace Silnik\Browser\Data;

use Silnik\Browser\Constants\DeviceType;

DeviceModels::$IOS_MODELS = [

    /* Generic names */
    'iPhone'                                    => [ 'Apple', 'iPhone', DeviceType::MOBILE ],
    'iPhone 3G'                                 => [ 'Apple', 'iPhone 3G', DeviceType::MOBILE ],
    'iPhone 3GS'                                => [ 'Apple', 'iPhone 3GS', DeviceType::MOBILE ],
    'iPhone 4'                                  => [ 'Apple', 'iPhone 4', DeviceType::MOBILE ],
    'iPhone 4S'                                 => [ 'Apple', 'iPhone 4S', DeviceType::MOBILE ],
    'iPhone 5'                                  => [ 'Apple', 'iPhone 5', DeviceType::MOBILE ],
    'iPhone 5c'                                 => [ 'Apple', 'iPhone 5c', DeviceType::MOBILE ],
    'iPhone 5s'                                 => [ 'Apple', 'iPhone 5s', DeviceType::MOBILE ],
    'iPhone 6'                                  => [ 'Apple', 'iPhone 6', DeviceType::MOBILE ],
    'iPhone 6 Plus'                             => [ 'Apple', 'iPhone 6 Plus', DeviceType::MOBILE ],
    'iPod'                                      => [ 'Apple', 'iPod touch', DeviceType::MEDIA ],
    'iPod touch'                                => [ 'Apple', 'iPod touch', DeviceType::MEDIA ],
    'iPad'                                      => [ 'Apple', 'iPad', DeviceType::TABLET ],

    /* Offical gestalt names */
    'iPhone1,1'                                 => [ 'Apple', 'iPhone', DeviceType::MOBILE ],
    'iPhone1,2'                                 => [ 'Apple', 'iPhone 3G', DeviceType::MOBILE ],
    'iPhone2,1'                                 => [ 'Apple', 'iPhone 3GS', DeviceType::MOBILE ],
    'iPhone3,1'                                 => [ 'Apple', 'iPhone 4', DeviceType::MOBILE ],
    'iPhone3,2'                                 => [ 'Apple', 'iPhone 4', DeviceType::MOBILE ],
    'iPhone3,3'                                 => [ 'Apple', 'iPhone 4', DeviceType::MOBILE ],
    'iPhone4,1'                                 => [ 'Apple', 'iPhone 4S', DeviceType::MOBILE ],
    'iPhone5,1'                                 => [ 'Apple', 'iPhone 5', DeviceType::MOBILE ],
    'iPhone5,2'                                 => [ 'Apple', 'iPhone 5', DeviceType::MOBILE ],
    'iPhone5,3'                                 => [ 'Apple', 'iPhone 5c', DeviceType::MOBILE ],
    'iPhone5,4'                                 => [ 'Apple', 'iPhone 5c', DeviceType::MOBILE ],
    'iPhone6,1'                                 => [ 'Apple', 'iPhone 5s', DeviceType::MOBILE ],
    'iPhone6,2'                                 => [ 'Apple', 'iPhone 5s', DeviceType::MOBILE ],
    'iPhone7,1'                                 => [ 'Apple', 'iPhone 6 Plus', DeviceType::MOBILE ],
    'iPhone7,2'                                 => [ 'Apple', 'iPhone 6', DeviceType::MOBILE ],
    'iPhone8,1'                                 => [ 'Apple', 'iPhone 6s', DeviceType::MOBILE ],
    'iPhone8,2'                                 => [ 'Apple', 'iPhone 6s Plus', DeviceType::MOBILE ],
    'iPhone8,4'                                 => [ 'Apple', 'iPhone SE', DeviceType::MOBILE ],
    'iPhone9,1'                                 => [ 'Apple', 'iPhone 7', DeviceType::MOBILE ],
    'iPhone9,2'                                 => [ 'Apple', 'iPhone 7 Plus', DeviceType::MOBILE ],
    'iPhone9,3'                                 => [ 'Apple', 'iPhone 7', DeviceType::MOBILE ],
    'iPhone9,4'                                 => [ 'Apple', 'iPhone 7 Plus', DeviceType::MOBILE ],
    'iPhone10,1'                                => [ 'Apple', 'iPhone 8', DeviceType::MOBILE ],
    'iPhone10,2'                                => [ 'Apple', 'iPhone 8 Plus', DeviceType::MOBILE ],
    'iPhone10,3'                                => [ 'Apple', 'iPhone X', DeviceType::MOBILE ],
    'iPhone10,4'                                => [ 'Apple', 'iPhone 8', DeviceType::MOBILE ],
    'iPhone10,5'                                => [ 'Apple', 'iPhone 8 Plus', DeviceType::MOBILE ],
    'iPhone10,6'                                => [ 'Apple', 'iPhone X', DeviceType::MOBILE ],
    'iPhone11,2'                                => [ 'Apple', 'iPhone XS', DeviceType::MOBILE ],
    'iPhone11,4'                                => [ 'Apple', 'iPhone XS Max', DeviceType::MOBILE ],
    'iPhone11,6'                                => [ 'Apple', 'iPhone XS Max', DeviceType::MOBILE ],
    'iPhone11,8'                                => [ 'Apple', 'iPhone XR', DeviceType::MOBILE ],
    'iPhone12,1'                                => [ 'Apple', 'iPhone 11', DeviceType::MOBILE ],
    'iPhone12,3'                                => [ 'Apple', 'iPhone 11 Pro', DeviceType::MOBILE ],
    'iPhone12,5'                                => [ 'Apple', 'iPhone 11 Pro Max', DeviceType::MOBILE ],
    'iPhone12,8'                                => [ 'Apple', 'iPhone SE (2nd gen)', DeviceType::MOBILE ],
    'iPhone13,1'                                => [ 'Apple', 'iPhone 12 Mini', DeviceType::MOBILE ],
    'iPhone13,2'                                => [ 'Apple', 'iPhone 12', DeviceType::MOBILE ],
    'iPhone13,3'                                => [ 'Apple', 'iPhone 12 Pro', DeviceType::MOBILE ],
    'iPhone13,4'                                => [ 'Apple', 'iPhone 12 Pro Max', DeviceType::MOBILE ],
    'iPhone14,2'                                => [ 'Apple', 'iPhone 13 Pro', DeviceType::MOBILE ],
    'iPhone14,3'                                => [ 'Apple', 'iPhone 13 Pro Max', DeviceType::MOBILE ],
    'iPhone14,4'                                => [ 'Apple', 'iPhone 13 Mini', DeviceType::MOBILE ],
    'iPhone14,5'                                => [ 'Apple', 'iPhone 13', DeviceType::MOBILE ],

    'iPod1,1'                                   => [ 'Apple', 'iPod touch', DeviceType::MEDIA ],
    'iPod2,1'                                   => [ 'Apple', 'iPod touch (2nd gen)', DeviceType::MEDIA ],
    'iPod3,1'                                   => [ 'Apple', 'iPod touch (3rd gen)', DeviceType::MEDIA ],
    'iPod4,1'                                   => [ 'Apple', 'iPod touch (4th gen)', DeviceType::MEDIA ],
    'iPod5,1'                                   => [ 'Apple', 'iPod touch (5th gen)', DeviceType::MEDIA ],
    'iPod7,1'                                   => [ 'Apple', 'iPod touch (6th gen)', DeviceType::MEDIA ],
    'iPod9,1'                                   => [ 'Apple', 'iPod touch (7th gen)', DeviceType::MEDIA ],
    'iPad1,1'                                   => [ 'Apple', 'iPad', DeviceType::TABLET ],
    'iPad1,2'                                   => [ 'Apple', 'iPad 2', DeviceType::TABLET ],
    'iPad2,1'                                   => [ 'Apple', 'iPad 2', DeviceType::TABLET ],
    'iPad2,2'                                   => [ 'Apple', 'iPad 2', DeviceType::TABLET ],
    'iPad2,3'                                   => [ 'Apple', 'iPad 2', DeviceType::TABLET ],
    'iPad2,4'                                   => [ 'Apple', 'iPad 2', DeviceType::TABLET ],
    'iPad2,5'                                   => [ 'Apple', 'iPad mini', DeviceType::TABLET ],
    'iPad2,6'                                   => [ 'Apple', 'iPad mini', DeviceType::TABLET ],
    'iPad2,7'                                   => [ 'Apple', 'iPad mini', DeviceType::TABLET ],
    'iPad3,1'                                   => [ 'Apple', 'iPad (3rd gen)', DeviceType::TABLET ],
    'iPad3,2'                                   => [ 'Apple', 'iPad (3rd gen)', DeviceType::TABLET ],
    'iPad3,3'                                   => [ 'Apple', 'iPad (3rd gen)', DeviceType::TABLET ],
    'iPad3,4'                                   => [ 'Apple', 'iPad (4th gen)', DeviceType::TABLET ],
    'iPad3,5'                                   => [ 'Apple', 'iPad (4th gen)', DeviceType::TABLET ],
    'iPad3,6'                                   => [ 'Apple', 'iPad (4th gen)', DeviceType::TABLET ],
    'iPad4,1'                                   => [ 'Apple', 'iPad Air', DeviceType::TABLET ],
    'iPad4,2'                                   => [ 'Apple', 'iPad Air', DeviceType::TABLET ],
    'iPad4,3'                                   => [ 'Apple', 'iPad Air', DeviceType::TABLET ],
    'iPad4,4'                                   => [ 'Apple', 'iPad mini 2', DeviceType::TABLET ],
    'iPad4,5'                                   => [ 'Apple', 'iPad mini 2', DeviceType::TABLET ],
    'iPad4,6'                                   => [ 'Apple', 'iPad mini 2', DeviceType::TABLET ],
    'iPad4,7'                                   => [ 'Apple', 'iPad mini 3', DeviceType::TABLET ],
    'iPad4,8'                                   => [ 'Apple', 'iPad mini 3', DeviceType::TABLET ],
    'iPad4,9'                                   => [ 'Apple', 'iPad mini 3', DeviceType::TABLET ],
    'iPad5,1'                                   => [ 'Apple', 'iPad mini 4', DeviceType::TABLET ],
    'iPad5,2'                                   => [ 'Apple', 'iPad mini 4', DeviceType::TABLET ],
    'iPad5,3'                                   => [ 'Apple', 'iPad Air 2', DeviceType::TABLET ],
    'iPad5,4'                                   => [ 'Apple', 'iPad Air 2', DeviceType::TABLET ],
    'iPad6,3'                                   => [ 'Apple', 'iPad Pro (9.7″)', DeviceType::TABLET ],
    'iPad6,4'                                   => [ 'Apple', 'iPad Pro (9.7″)', DeviceType::TABLET ],
    'iPad6,7'                                   => [ 'Apple', 'iPad Pro (12.9″)', DeviceType::TABLET ],
    'iPad6,8'                                   => [ 'Apple', 'iPad Pro (12.9″)', DeviceType::TABLET ],
    'iPad6,11'                                  => [ 'Apple', 'iPad (5th gen)', DeviceType::TABLET ],
    'iPad6,12'                                  => [ 'Apple', 'iPad (5th gen)', DeviceType::TABLET ],
    'iPad7,1'                                   => [ 'Apple', 'iPad Pro (12.9″, 2nd gen)', DeviceType::TABLET ],
    'iPad7,2'                                   => [ 'Apple', 'iPad Pro (12.9″, 2nd gen)', DeviceType::TABLET ],
    'iPad7,3'                                   => [ 'Apple', 'iPad Pro (10.5″)', DeviceType::TABLET ],
    'iPad7,4'                                   => [ 'Apple', 'iPad Pro (10.5″)', DeviceType::TABLET ],
    'iPad7,5'                                   => [ 'Apple', 'iPad (9.7″, 6th gen)', DeviceType::TABLET ],
    'iPad7,6'                                   => [ 'Apple', 'iPad (9.7″, 6th gen)', DeviceType::TABLET ],
    'iPad7,11'                                  => [ 'Apple', 'iPad (10.2″, 7th gen)', DeviceType::TABLET ],
    'iPad7,12'                                  => [ 'Apple', 'iPad (10.2″, 7th gen)', DeviceType::TABLET ],
    'iPad8,1'                                   => [ 'Apple', 'iPad Pro (11.0″)', DeviceType::TABLET ],
    'iPad8,2'                                   => [ 'Apple', 'iPad Pro (11.0″)', DeviceType::TABLET ],
    'iPad8,3'                                   => [ 'Apple', 'iPad Pro (11.0″)', DeviceType::TABLET ],
    'iPad8,4'                                   => [ 'Apple', 'iPad Pro (11.0″)', DeviceType::TABLET ],
    'iPad8,5'                                   => [ 'Apple', 'iPad Pro (12.9″, 3rd gen)', DeviceType::TABLET ],
    'iPad8,6'                                   => [ 'Apple', 'iPad Pro (12.9″, 3rd gen)', DeviceType::TABLET ],
    'iPad8,7'                                   => [ 'Apple', 'iPad Pro (12.9″, 3rd gen)', DeviceType::TABLET ],
    'iPad8,8'                                   => [ 'Apple', 'iPad Pro (12.9″, 3rd gen)', DeviceType::TABLET ],
    'iPad8,9'                                   => [ 'Apple', 'iPad Pro (11.0″, 4th gen)', DeviceType::TABLET ],
    'iPad8,10'                                  => [ 'Apple', 'iPad Pro (11.0″, 4th gen)', DeviceType::TABLET ],
    'iPad8,11'                                  => [ 'Apple', 'iPad Pro (12.9″, 4th gen)', DeviceType::TABLET ],
    'iPad8,12'                                  => [ 'Apple', 'iPad Pro (12.9″, 4th gen)', DeviceType::TABLET ],
    'iPad11,1'                                  => [ 'Apple', 'iPad mini (5th gen)', DeviceType::TABLET ],
    'iPad11,2'                                  => [ 'Apple', 'iPad mini (5th gen)', DeviceType::TABLET ],
    'iPad11,3'                                  => [ 'Apple', 'iPad Air (3rd gen)', DeviceType::TABLET ],
    'iPad11,4'                                  => [ 'Apple', 'iPad Air (3rd gen)', DeviceType::TABLET ],
    'iPad11,6'                                  => [ 'Apple', 'iPad (8th gen)', DeviceType::TABLET ],
    'iPad11,7'                                  => [ 'Apple', 'iPad (8th gen)', DeviceType::TABLET ],
    'iPad12,1'                                  => [ 'Apple', 'iPad (9th gen)', DeviceType::TABLET ],
    'iPad12,2'                                  => [ 'Apple', 'iPad (9th gen)', DeviceType::TABLET ],
    'iPad14,1'                                  => [ 'Apple', 'iPad mini (6th gen)', DeviceType::TABLET ],
    'iPad14,2'                                  => [ 'Apple', 'iPad mini (6th gen)', DeviceType::TABLET ],
    'iPad13,1'                                  => [ 'Apple', 'iPad Air (4th gen)', DeviceType::TABLET ],
    'iPad13,2'                                  => [ 'Apple', 'iPad Air (4th gen)', DeviceType::TABLET ],
    'iPad13,4'                                  => [ 'Apple', 'iPad Pro (11.0″, 5th gen)', DeviceType::TABLET ],
    'iPad13,5'                                  => [ 'Apple', 'iPad Pro (11.0″, 5th gen)', DeviceType::TABLET ],
    'iPad13,6'                                  => [ 'Apple', 'iPad Pro (11.0″, 5th gen)', DeviceType::TABLET ],
    'iPad13,7'                                  => [ 'Apple', 'iPad Pro (11.0″, 5th gen)', DeviceType::TABLET ],
    'iPad13,8'                                  => [ 'Apple', 'iPad Pro (12.9″, 5th gen)', DeviceType::TABLET ],
    'iPad13,9'                                  => [ 'Apple', 'iPad Pro (12.9″, 5th gen)', DeviceType::TABLET ],
    'iPad13,10'                                 => [ 'Apple', 'iPad Pro (12.9″, 5th gen)', DeviceType::TABLET ],
    'iPad13,11'                                 => [ 'Apple', 'iPad Pro (12.9″, 5th gen)', DeviceType::TABLET ],  
];
