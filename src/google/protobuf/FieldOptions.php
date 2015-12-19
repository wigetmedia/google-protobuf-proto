<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : descriptor.proto
 */


namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.FieldOptions
 *
 * @\Protobuf\Annotation\Descriptor(
 *   name="FieldOptions",
 *   package="google.protobuf",
 *   fields={
 *     @\Protobuf\Annotation\Field(
 *       name="ctype",
 *       tag=1,
 *       type=14,
 *       label=1,
 *       default="STRING",
 *       reference="google.protobuf.FieldOptions.CType"
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="packed",
 *       tag=2,
 *       type=8,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="jstype",
 *       tag=6,
 *       type=14,
 *       label=1,
 *       default="JS_NORMAL",
 *       reference="google.protobuf.FieldOptions.JSType"
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="lazy",
 *       tag=5,
 *       type=8,
 *       label=1,
 *       default="false"
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="deprecated",
 *       tag=3,
 *       type=8,
 *       label=1,
 *       default="false"
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="weak",
 *       tag=10,
 *       type=8,
 *       label=1,
 *       default="false"
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="uninterpreted_option",
 *       tag=999,
 *       type=11,
 *       label=3,
 *       reference="google.protobuf.UninterpretedOption"
 *     )
 *   },
 *   extensions={
 *   }
 * )
 */
class FieldOptions extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * ctype optional enum = 1
     *
     * @var \google\protobuf\FieldOptions\CType
     */
    protected $ctype = null;

    /**
     * packed optional bool = 2
     *
     * @var bool
     */
    protected $packed = null;

    /**
     * jstype optional enum = 6
     *
     * @var \google\protobuf\FieldOptions\JSType
     */
    protected $jstype = null;

    /**
     * lazy optional bool = 5
     *
     * @var bool
     */
    protected $lazy = null;

    /**
     * deprecated optional bool = 3
     *
     * @var bool
     */
    protected $deprecated = null;

    /**
     * weak optional bool = 10
     *
     * @var bool
     */
    protected $weak = null;

    /**
     * uninterpreted_option repeated message = 999
     *
     * @var \Protobuf\Collection<\google\protobuf\UninterpretedOption>
     */
    protected $uninterpreted_option = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ctype = \google\protobuf\FieldOptions\CType::STRING();
        $this->jstype = \google\protobuf\FieldOptions\JSType::JS_NORMAL();
        $this->lazy = false;
        $this->deprecated = false;
        $this->weak = false;
    }

    /**
     * Check if 'ctype' has a value
     *
     * @return bool
     */
    public function hasCtype()
    {
        return $this->ctype !== null;
    }

    /**
     * Get 'ctype' value
     *
     * @return \google\protobuf\FieldOptions\CType
     */
    public function getCtype()
    {
        return $this->ctype;
    }

    /**
     * Set 'ctype' value
     *
     * @param \google\protobuf\FieldOptions\CType $value
     */
    public function setCtype(\google\protobuf\FieldOptions\CType $value)
    {
        return $this->ctype = $value;
    }

    /**
     * Check if 'packed' has a value
     *
     * @return bool
     */
    public function hasPacked()
    {
        return $this->packed !== null;
    }

    /**
     * Get 'packed' value
     *
     * @return bool
     */
    public function getPacked()
    {
        return $this->packed;
    }

    /**
     * Set 'packed' value
     *
     * @param bool $value
     */
    public function setPacked($value)
    {
        return $this->packed = $value;
    }

    /**
     * Check if 'jstype' has a value
     *
     * @return bool
     */
    public function hasJstype()
    {
        return $this->jstype !== null;
    }

    /**
     * Get 'jstype' value
     *
     * @return \google\protobuf\FieldOptions\JSType
     */
    public function getJstype()
    {
        return $this->jstype;
    }

    /**
     * Set 'jstype' value
     *
     * @param \google\protobuf\FieldOptions\JSType $value
     */
    public function setJstype(\google\protobuf\FieldOptions\JSType $value)
    {
        return $this->jstype = $value;
    }

    /**
     * Check if 'lazy' has a value
     *
     * @return bool
     */
    public function hasLazy()
    {
        return $this->lazy !== null;
    }

    /**
     * Get 'lazy' value
     *
     * @return bool
     */
    public function getLazy()
    {
        return $this->lazy;
    }

    /**
     * Set 'lazy' value
     *
     * @param bool $value
     */
    public function setLazy($value)
    {
        return $this->lazy = $value;
    }

    /**
     * Check if 'deprecated' has a value
     *
     * @return bool
     */
    public function hasDeprecated()
    {
        return $this->deprecated !== null;
    }

    /**
     * Get 'deprecated' value
     *
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * Set 'deprecated' value
     *
     * @param bool $value
     */
    public function setDeprecated($value)
    {
        return $this->deprecated = $value;
    }

    /**
     * Check if 'weak' has a value
     *
     * @return bool
     */
    public function hasWeak()
    {
        return $this->weak !== null;
    }

    /**
     * Get 'weak' value
     *
     * @return bool
     */
    public function getWeak()
    {
        return $this->weak;
    }

    /**
     * Set 'weak' value
     *
     * @param bool $value
     */
    public function setWeak($value)
    {
        return $this->weak = $value;
    }

    /**
     * Check if 'uninterpreted_option' has a value
     *
     * @return bool
     */
    public function hasUninterpretedOptionList()
    {
        return $this->uninterpreted_option !== null;
    }

    /**
     * Get 'uninterpreted_option' value
     *
     * @return \Protobuf\Collection<\google\protobuf\UninterpretedOption>
     */
    public function getUninterpretedOptionList()
    {
        return $this->uninterpreted_option;
    }

    /**
     * Set 'uninterpreted_option' value
     *
     * @param \Protobuf\Collection<\google\protobuf\UninterpretedOption> $value
     */
    public function setUninterpretedOptionList(\Protobuf\Collection $value)
    {
        return $this->uninterpreted_option = $value;
    }

    /**
     * Add a new element to 'uninterpreted_option'
     *
     * @param \google\protobuf\UninterpretedOption $value
     */
    public function addUninterpretedOption(\google\protobuf\UninterpretedOption $value)
    {
        if ( $this->uninterpreted_option === null) {
            $this->uninterpreted_option = new \Protobuf\MessageCollection();
        }

        $this->uninterpreted_option[] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createReadContext($stream);
        $message = new self();

        $message->readFrom($context);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->ctype !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->ctype->value());
        }

        if ($this->packed !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->packed);
        }

        if ($this->jstype !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->jstype->value());
        }

        if ($this->lazy !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->lazy);
        }

        if ($this->deprecated !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->deprecated);
        }

        if ($this->weak !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeBool($stream, $this->weak);
        }

        if ($this->uninterpreted_option !== null) {
            foreach ($this->uninterpreted_option as $val) {
                $writer->writeVarint($stream, 7994);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->ctype = \google\protobuf\FieldOptions\CType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->packed = $reader->readBool($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->jstype = \google\protobuf\FieldOptions\JSType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->lazy = $reader->readBool($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->deprecated = $reader->readBool($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->weak = $reader->readBool($stream);

                continue;
            }

            if ($tag === 999) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\UninterpretedOption();

                if ($this->uninterpreted_option === null) {
                    $this->uninterpreted_option = new \Protobuf\MessageCollection();
                }

                $this->uninterpreted_option->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->put($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->ctype !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->ctype->value());
        }

        if ($this->packed !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->jstype !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->jstype->value());
        }

        if ($this->lazy !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->deprecated !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->weak !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->uninterpreted_option !== null) {
            foreach ($this->uninterpreted_option as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 2;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }


}

