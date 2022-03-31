<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Replaces an identifier with an surrogate using FPE with the FFX
 * mode of operation.
 * The identifier must be representable by the US-ASCII character set.
 * For a given crypto key and context, the same identifier will be
 * replaced with the same surrogate.
 * Note that a given identifier must be either the empty string or be at
 * least two characters long.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.CryptoReplaceFfxFpeConfig</code>
 */
class CryptoReplaceFfxFpeConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The key used by the encryption algorithm. [required]
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.CryptoKey crypto_key = 1;</code>
     */
    private $crypto_key = null;
    /**
     * A context may be used for higher security since the same
     * identifier in two different contexts likely will be given a distinct
     * surrogate. The principle is that the likeliness is inversely related
     * to the ratio of the number of distinct identifiers per context over the
     * number of possible surrogates: As long as this ratio is small, the
     * likehood is large.
     * If the context is not set, a default tweak will be used.
     * If the context is set but:
     * 1. there is no record present when transforming a given value or
     * 1. the field is not present when transforming a given value,
     * a default tweak will be used.
     * Note that case (1) is expected when an `InfoTypeTransformation` is
     * applied to both structured and non-structured `ContentItem`s.
     * Currently, the referenced field may be of value type integer or string.
     * The tweak is constructed as a sequence of bytes in big endian byte order
     * such that:
     * - a 64 bit integer is encoded followed by a single byte of value 1
     * - a string is encoded in UTF-8 format followed by a single byte of value 2
     * This is also known as the 'tweak', as in tweakable encryption.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.FieldId context = 2;</code>
     */
    private $context = null;
    protected $alphabet;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * The key used by the encryption algorithm. [required]
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.CryptoKey crypto_key = 1;</code>
     * @return \Google\Privacy\Dlp\V2beta1\CryptoKey
     */
    public function getCryptoKey()
    {
        return $this->crypto_key;
    }

    /**
     * The key used by the encryption algorithm. [required]
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.CryptoKey crypto_key = 1;</code>
     * @param \Google\Privacy\Dlp\V2beta1\CryptoKey $var
     * @return $this
     */
    public function setCryptoKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\CryptoKey::class);
        $this->crypto_key = $var;

        return $this;
    }

    /**
     * A context may be used for higher security since the same
     * identifier in two different contexts likely will be given a distinct
     * surrogate. The principle is that the likeliness is inversely related
     * to the ratio of the number of distinct identifiers per context over the
     * number of possible surrogates: As long as this ratio is small, the
     * likehood is large.
     * If the context is not set, a default tweak will be used.
     * If the context is set but:
     * 1. there is no record present when transforming a given value or
     * 1. the field is not present when transforming a given value,
     * a default tweak will be used.
     * Note that case (1) is expected when an `InfoTypeTransformation` is
     * applied to both structured and non-structured `ContentItem`s.
     * Currently, the referenced field may be of value type integer or string.
     * The tweak is constructed as a sequence of bytes in big endian byte order
     * such that:
     * - a 64 bit integer is encoded followed by a single byte of value 1
     * - a string is encoded in UTF-8 format followed by a single byte of value 2
     * This is also known as the 'tweak', as in tweakable encryption.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.FieldId context = 2;</code>
     * @return \Google\Privacy\Dlp\V2beta1\FieldId
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * A context may be used for higher security since the same
     * identifier in two different contexts likely will be given a distinct
     * surrogate. The principle is that the likeliness is inversely related
     * to the ratio of the number of distinct identifiers per context over the
     * number of possible surrogates: As long as this ratio is small, the
     * likehood is large.
     * If the context is not set, a default tweak will be used.
     * If the context is set but:
     * 1. there is no record present when transforming a given value or
     * 1. the field is not present when transforming a given value,
     * a default tweak will be used.
     * Note that case (1) is expected when an `InfoTypeTransformation` is
     * applied to both structured and non-structured `ContentItem`s.
     * Currently, the referenced field may be of value type integer or string.
     * The tweak is constructed as a sequence of bytes in big endian byte order
     * such that:
     * - a 64 bit integer is encoded followed by a single byte of value 1
     * - a string is encoded in UTF-8 format followed by a single byte of value 2
     * This is also known as the 'tweak', as in tweakable encryption.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.FieldId context = 2;</code>
     * @param \Google\Privacy\Dlp\V2beta1\FieldId $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\FieldId::class);
        $this->context = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.CryptoReplaceFfxFpeConfig.FfxCommonNativeAlphabet common_alphabet = 4;</code>
     * @return int
     */
    public function getCommonAlphabet()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.CryptoReplaceFfxFpeConfig.FfxCommonNativeAlphabet common_alphabet = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCommonAlphabet($var)
    {
        GPBUtil::checkEnum($var, \Google\Privacy\Dlp\V2beta1\CryptoReplaceFfxFpeConfig_FfxCommonNativeAlphabet::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * This is supported by mapping these to the alphanumeric characters
     * that the FFX mode natively supports. This happens before/after
     * encryption/decryption.
     * Each character listed must appear only once.
     * Number of characters must be in the range [2, 62].
     * This must be encoded as ASCII.
     * The order of characters does not matter.
     *
     * Generated from protobuf field <code>string custom_alphabet = 5;</code>
     * @return string
     */
    public function getCustomAlphabet()
    {
        return $this->readOneof(5);
    }

    /**
     * This is supported by mapping these to the alphanumeric characters
     * that the FFX mode natively supports. This happens before/after
     * encryption/decryption.
     * Each character listed must appear only once.
     * Number of characters must be in the range [2, 62].
     * This must be encoded as ASCII.
     * The order of characters does not matter.
     *
     * Generated from protobuf field <code>string custom_alphabet = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomAlphabet($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The native way to select the alphabet. Must be in the range [2, 62].
     *
     * Generated from protobuf field <code>int32 radix = 6;</code>
     * @return int
     */
    public function getRadix()
    {
        return $this->readOneof(6);
    }

    /**
     * The native way to select the alphabet. Must be in the range [2, 62].
     *
     * Generated from protobuf field <code>int32 radix = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRadix($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAlphabet()
    {
        return $this->whichOneof("alphabet");
    }

}

