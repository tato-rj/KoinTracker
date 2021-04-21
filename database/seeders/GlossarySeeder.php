<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Glossary;

class GlossarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $terms = [
['term' => 'API',

'meaning' => 'API stands for Application Programming Interface. It is a set of routines, protocols, and tools for building software applications. APIs specify how software components should interact, such as what data to use and what actions should be taken.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'ASIC',

'meaning' => 'An acronym for application-specific integrated circuit — a device designed for the sole purpose of mining cryptocurrencies.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Address',

'meaning' => 'A place where cryptocurrency can be sent to and from, in the form of a string of letters and numbers.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Airdrop',

'meaning' => 'A marketing campaign that distributes a specific cryptocurrency or token to an audience. 

Algorithm

A process or set of rules to be followed in problem-solving or calculation operations, usually by a computer, although humans tend to follow steps algorithmically as well (let’s say doing math or following a recipe).',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'All-Time-High (ATH)',

'meaning' => 'The highest point (in price, in market capitalization) that a cryptocurrency has been in history. *see All-Time-Low (ATL).',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'All-Time-Low (ATL)',

'meaning' => 'The lowest point (in price, in market capitalization) that a cryptocurrency has been in history. *see All-Time-High (ATH).',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Altcoin',

'meaning' => 'As Bitcoin is the first cryptocurrency that captured the world’s imagination, all other coins were subsequently termed “altcoins,” as in “alternative coins.”

Anarcho-capitalism

A political philosophy originally conceived by American economist Murray Rothbard that has now been embraced by many members of the crypto community.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Anti-Fragile',

'meaning' => 'A quality attached to an asset that means it performs better when exposed to volatility and shocks.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Anti-Money Laundering (AML)',

'meaning' => 'A set of international laws enacted to curtail criminal organizations or individuals laundering money through cryptocurrencies into real-world cash.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Arbitrage',

'meaning' => 'Arbitrage is the practice of quickly buying and selling the same asset in different markets to take advantage of price differences between the markets.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Ashdraked',

'meaning' => 'The complete loss of a trader\'s total invested capital, specifically as a result of shorting Bitcoin.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Ask Price',

'meaning' => 'The minimum price that a seller is willing to accept for an asset. The ask price is also sometimes referred to as the offer price.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Astroturfing',

'meaning' => 'The practice of disguising marketing campaigns or otherwise sponsored messaging as the unprompted views of genuine community members.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Atomic Swap',

'meaning' => 'The transfer of cryptocurrency from one party to another, without the use of an exchange or other intermediary.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Attestation Ledger',

'meaning' => 'An attestation ledger is an account book designed to provide evidence of individual transactions. It is generally used to “attest” that a financial transaction took place, or to prove authenticity of transactions or products.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Automated Market Maker (AMM)',

'meaning' => 'An automated market maker (AMM) is a system that provides liquidity to the exchange it operates in through automated trading.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Bag',

'meaning' => 'Crypto slang for a large quantity of a specific cryptocurrency. Alternatively (but less frequently) used to refer to the contents of an individual\'s crypto portfolio.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Bagholder',

'meaning' => 'An investor who continues to hold large amounts of a specific coin or token, regardless of its performance.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Bear',

'meaning' => 'Someone who believes that prices in a given market will decline over an extended period. Such a person might be referred to as “bearish.”

Bear Trap

The attempted manipulation of a specific cryptocurrency’s price, based on the coordinated activity of a group of traders.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'BitLicense',

'meaning' => 'A business license permitting regulated virtual currency activities, issued by the New York State Department of Financial Services.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Bitcoin ATM (BTM)',

'meaning' => 'An automated teller machine (ATM or cashpoint) that allows the user to buy and sell Bitcoin.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Bitcoin Improvement Proposal (BIP)',

'meaning' => 'The standard format for documents proposing changes to Bitcoin.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Bits',

'meaning' => 'A commonly used unit, or subdivision, of a single Bitcoin.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Block',

'meaning' => 'A file containing information on transactions completed during a given time period. Blocks are the constituent parts of a blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Block Explorer',

'meaning' => 'An application enabling a user to view details of blocks on a given blockchain. Also known as a blockchain browser.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Block Height',

'meaning' => 'A value describing the number of blocks preceding a given block in the blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Block Reward',

'meaning' => 'The coins awarded to a miner or group of miners for solving the cryptographic problem required to create a new block on a given blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Blockchain',

'meaning' => 'A distributed ledger system. A sequence of blocks, or units of digital information, stored consecutively in a public database. The basis for cryptocurrencies.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Bollinger Band',

'meaning' => 'A tool developed by Bollinger to help in the recognition of systemic pattern recognition in prices; it is a band that is plotted two standard deviations away from the simple moving average, or exponential moving average in some cases.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Bonding Curve',

'meaning' => 'A bonding curve is a mathematical curve that defines the relationship between the price and the supply of a given asset.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Bots',

'meaning' => 'Automated software that can carry out tasks such as cryptocurrency trades.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Brute Force Attack (BFA)',

'meaning' => 'An attempt to crack a password or key through automated trial and error.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Bubble',

'meaning' => 'When an asset is traded at a price exceeding that asset\'s intrinsic value.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Bug Bounty',

'meaning' => 'A reward offered for the identification of vulnerabilities in software.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Bull',

'meaning' => 'A person that is optimistic and confident that market prices will increase, this person is also known to be &amp;quot;bullish&amp;quot; about the market or price.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Bull Trap',

'meaning' => 'A bull trap occurs when a steadily declining asset appears to reverse and go upward, but soon resumes its downward trend.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Burned',

'meaning' => 'Cryptocurrency tokens or coins are considered “burned” when they have been purposely and permanently removed from circulation.-inline-block

Buy Wall

A buy wall is a disproportionately large buy limit order placed on a cryptocurrency exchange.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Byzantine Fault Tolerance (BFT)',

'meaning' => 'Byzantine Fault Tolerance (BFT) is the property of a computer system that allows it to reach consensus regardless of the failure of some of its components.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Byzantine Generals’ Problem',

'meaning' => 'A situation where communication that requires consensus on a single strategy from all members within a group or party cannot be trusted or verified. 

Candlesticks

A candlestick chart is a graphing technique used to show changes in price over time. Each candle provides 4 points of information opening price, closing price, high, and low. Also known as “candles” for short.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Cash',

'meaning' => 'Cash is the most liquid form of money: physical coins and banknotes in the most narrow sense of the term.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Central Bank Digital Currency',

'meaning' => 'CBDCs are digital currencies issued by a central bank whose status as legal tender depends on government regulation or law. 

Central Ledger

A central ledger is a physical book or a computer file used to record transactions in a centralized manner.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Central Processing Unit (CPU)',

'meaning' => 'A central processing unit (CPU) is the part of a computer that is in charge of interpreting and executing programs and coordinating the work of all other components.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Centralized',

'meaning' => 'A centralized organizational structure is one in which a single node or a small number of them are in control of an entire network.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Centralized Exchange (CEX)',

'meaning' => 'Centralized exchanges (CEXs) are a type of cryptocurrency exchange that is operated by a company that owns it in a centralized manner.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Chain Split',

'meaning' => 'Chain splits are another term used to describe cryptocurrency forks — the separation of a single original coin into several independently managed projects.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Change',

'meaning' => 'Change — a concept relevant to cryptocurrencies that use the UTXO model — is the number of coins sent back to a user after they use their unspent outputs to initiate a transaction.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Chargeback',

'meaning' => 'A chargeback is the return of money to the payer of a certain transaction, most commonly one that was made with a credit or debit card.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Cipher',

'meaning' => 'A cipher is any algorithm that can be used to encrypt and decrypt information.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Circulating Supply',

'meaning' => 'The best approximation of the number of coins that are circulating in the market and in the general public’s hands. 

Client

A client is software that can access and process blockchain transactions on a local computer. A common application of this is a cryptocurrency software wallet.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Close',

'meaning' => 'Refers to the closing price; similar to the same term used in stock trading.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Cloud Mining',

'meaning' => 'Cryptocurrency mining with remote processing power rented from companies.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Co-Signer',

'meaning' => 'A person or entity that has partial control and access over a cryptocurrency wallet.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Coin',

'meaning' => 'A coin can refer to a cryptocurrency that can operate independently or to a single unit of such cryptocurrency.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Coinbase',

'meaning' => 'In mineable cryptocurrencies, a coinbase is the number of coins that are generated from scratch and awarded to miners for mining every new block.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Cold Storage',

'meaning' => 'Offline storage of cryptocurrencies, typically involving hardware non-custodial wallets, USBs, offline computers, or paper wallets.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Cold Wallet',

'meaning' => 'A cryptocurrency wallet that is in cold storage, i.e. not connected to the internet.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Collateralized Debt Position (CDP)',

'meaning' => 'A collateralized debt position is held by locking collateral in smart contracts to generate stablecoins.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Confirmations',

'meaning' => 'A cryptocurrency transaction is considered confirmed when it is included in a block on the blockchain. Each new block after the first one is an additional confirmation for that transaction.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Consensus',

'meaning' => 'Consensus is achieved when all participants of the network agree on the order and content of the blocks in the blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Consortium Blockchain',

'meaning' => 'A privately owned and operated blockchain where a consortium shares information not readily available to the public, while relying on the immutable and transparent properties of the blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Correction',

'meaning' => 'A correction is a pullback of an asset’s price of at least 10% to adjust for over-valuation.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Craig Wright',

'meaning' => 'Craig Wright is an Australian computer scientist associated with Bitcoin SV.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Cryptoasset',

'meaning' => 'A cryptoasset is any digital asset that uses cryptographic technologies to maintain its operation as a currency or decentralized application.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Cryptocurrency',

'meaning' => 'Cryptocurrencies are digital currencies that use cryptographic technologies to secure their operation.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Cryptographic Hash Function',

'meaning' => 'Cryptographic hash functions produce a fixed-size hash value from a variable-size transaction input.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Cryptography',

'meaning' => 'A field of study and practice to secure information, preventing third parties from reading information to which they are not privy.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Cryptojacking',

'meaning' => 'The use of another party’s computer to mine cryptocurrency without their consent.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Custodial',

'meaning' => 'Custodial cryptocurrency businesses are the ones that are in possession of their customers’ funds for the duration of the use of their services.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Cypherpunk',

'meaning' => 'The cypherpunk movement promotes the use of cryptography and other privacy-focused technologies to advance social and political progress.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'DYOR',

'meaning' => 'The acronym of Do Your Own Research — encouraging investors to complete due diligence into a project before investing.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Dark Web',

'meaning' => 'A portion of the internet existing on darknets not indexed by search engines, that can only be accessed with specific software, configurations or authorizations.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Date of Launch',

'meaning' => 'A term used for when ICOs will put up their tokens for sale.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Day Trading',

'meaning' => 'Day trading is the practice of frequently buying and selling assets in order to make a profit on intraday changes in their price.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'DeFi',

'meaning' => 'A movement encouraging alternatives to traditional, centralized forms of financial services.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'DeFi Degens',

'meaning' => 'DeFi degenerates. A subculture associated with a disreputable corner of decentralized finance known for pump and dump schemes.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Dead Cat Bounce',

'meaning' => 'A temporary recovery in prices after a prolonged decrease.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Decentralized',

'meaning' => 'Decentralization refers to the property of a system in which nodes or actors work in concert in a distributed fashion to achieve a common goal.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Decentralized Applications (DApps)',

'meaning' => 'A type of application that runs on a decentralized network, avoiding a single point of failure.-inline-block

Decentralized Autonomous Initial Coin Offerings (DAICO)

A method for decentralized funding of projects that introduces a form of governance in the ICO process, allowing backers to vote for the return of their funds if certain conditions are met.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Decentralized Autonomous Organizations (DAO)',

'meaning' => 'An organization that is run through rules encoded in smart contracts.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Decentralized Exchange (DEX)',

'meaning' => 'A peer-to-peer exchange allowing users to trade cryptocurrency without the need for an intermediary.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Decentralized Social Media',

'meaning' => 'Decentralized social media is a social media platform that is based on blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Decryption',

'meaning' => 'The process of transforming encrypted data back into a format that is readable by a user or machine.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Deflation',

'meaning' => 'A decline in the general level of prices for goods and services in an economy.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Delegated Proof-of-Stake (dPOS)',

'meaning' => 'An alternative to the Proof-of-Stake and Proof-of-Work consensus algorithms.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Depth Chart',

'meaning' => 'A graph that plots the requests to buy (bids) and the requests to sell (asks) on a chart, based on limit orders. The chart shows the point at which the market is most likely to accept a transaction.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Derivative',

'meaning' => 'A financial instrument deriving its value from the value of an underlying asset.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Derivatives Market',

'meaning' => 'A public market for derivatives, instruments such as futures contracts or options, which are derived from other forms of cryptocurrency assets.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Deterministic Wallet',

'meaning' => 'A type of cryptocurrency wallet in which keys and addresses are created from a single seed.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Difficulty',

'meaning' => 'A measure of how hard it is to validate a new block on a blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Digital Commodity',

'meaning' => 'A commodity that exists digitally, as opposed to in “meatspace.”

Digital Currency

A currency that exists only in digital form, as opposed to traditional physical currencies.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Digital Identity',

'meaning' => 'Information used by a person or entity to identify themselves to a computer or network.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Digital Signature',

'meaning' => 'A method for proving the authenticity of a digital communication.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Dildo',

'meaning' => 'No, not that. The red or green “candles,” or vertical lines, on graphs showing cryptocurrency market data.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Directed Acyclic Graph (DAG)',

'meaning' => 'A way of structuring data, often used for data modelling, and increasingly as a consensus tool in cryptocurrencies.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Distributed Consensus',

'meaning' => 'Collective agreement reached among nodes in a network.-inline-block

Distributed Denial of Service (DDoS) Attack

An attempt by a bad actor to disrupt the operation of an application, server or network by flooding it with traffic.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Distributed Ledger',

'meaning' => 'Distributed ledgers are ledgers in which data is stored across a network of decentralized nodes. A distributed ledger does not necessarily involve a cryptocurrency and may be permissioned and private.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Distributed Ledger Technology (DLT)',

'meaning' => 'A database that is shared by multiple participants, in multiple places. The basis for blockchains.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Distributed Network',

'meaning' => 'A network in which the data and applications are dependent on multiple sources, as opposed to one location.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Dolphin',

'meaning' => 'Someone with a moderate holding of cryptocurrency.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Dominance',

'meaning' => 'A measure of Bitcoin\'s value in the context of the larger cryptocurrency market.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Dorian Nakamoto',

'meaning' => 'Dorian Nakamoto is a Japanese-American physicist who some believe to be Satoshi Nakamoto. 

Double Spending

The potential for a digital currency to be spent twice.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Dump',

'meaning' => 'A sudden sell-off of digital assets.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Dumping',

'meaning' => 'A collective market sell-off that occurs when large quantities of a particular cryptocurrency are sold in a short period of time.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Dust Transactions',

'meaning' => 'Miniscule amounts of Bitcoin in a wallet — with a value that would be outweighed by the cost of a transaction fee.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Dusting Attack',

'meaning' => 'An attack that aims to uncover the identity of a wallet’s owner, information that can subsequently be used in phishing scams.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'ELI5',

'meaning' => 'Short for “explain like I’m five” — a plea for simplicity when crypto concepts are being explained.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'ERC-20',

'meaning' => 'Tokens designed and used solely on the Ethereum platform.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'ERC-721',

'meaning' => 'A token standard for non-fungible Ethereum tokens. An Ethereum Improvement Proposal introduced in 2017, it enables smart contracts to operate as tradeable tokens similar to ERC-20 tokens.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Emission',

'meaning' => 'The speed at which new coins are produced and released.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Enterprise Ethereum Alliance (EEA)',

'meaning' => 'A group of organizations and companies working together to further develop the Ethereum network.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Escrow',

'meaning' => 'A financial instrument where assets or cash are held by a third party while a buyer and a seller complete a deal.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Ether',

'meaning' => 'The form of payment used in the operation of the distribution application platform, Ethereum, in order to incentivize machines into executing the requested operations.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Ethereum Improvement Proposal (EIP)',

'meaning' => 'Ethereum Improvement Proposals (EIPs) describe standards for the Ethereum platform, including core protocol specifications, client APIs, and contract standards.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Ethereum Virtual Machine (EVM)',

'meaning' => 'A Turing-complete virtual machine that enables execution of code exactly as intended; it is the runtime environment for every smart contract. Every Ethereum node runs on the EVM to maintain consensus across the blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Exchange',

'meaning' => 'Cryptocurrency exchanges (sometimes called digital currency exchanges) are businesses that allow customers to trade cryptocurrencies for fiat money or other cryptocurrencies.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Exchange Traded Fund (ETF)',

'meaning' => 'A security that tracks a basket of assets such as stocks, bonds, and cryptocurrencies but can be traded like a single stock.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'FOMO',

'meaning' => 'An acronym that stands for “Fear of Missing Out” and in the context of investing, refers to the feeling of apprehension for missing out on a potentially profitable investment opportunity and regretting it later.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'FUD',

'meaning' => 'An acronym that stands for “Fear, Uncertainty and Doubt.” It is a strategy to influence perception of certain cryptocurrencies or the cryptocurrency market in general by spreading negative, misleading or false information.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'FUDster',

'meaning' => 'Someone that is spreading FUD.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Faucet',

'meaning' => 'A cryptocurrency reward system usually on a website or app, that rewards users for completing certain tasks. It is mostly a technique used when first launching an altcoin to interest people in the coin.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Fiat',

'meaning' => 'Fiat currency is “legal tender” backed by a central government, such as the Federal Reserve, and with its own banking system, such as fractional reserve banking. It can take the form of physical cash, or it can be represented electronically, such as with bank credit.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Fiat-Pegged Cryptocurrency',

'meaning' => 'Also known as “pegged cryptocurrency,” it is a coin, token or asset issued on a blockchain that is linked to a government- or bank-issued currency. Each pegged cryptocurrency is guaranteed to have a specific cash value in reserves at all times.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Fish',

'meaning' => 'A fish, or minnow, is someone who holds insignificant amounts of cryptocurrencies, often at the mercy of whales who move the market up and down. *see Dolphin and Whale.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Flippening',

'meaning' => 'A situation hoped for by Ethereum fans, where the total market cap of Ethereum surpasses the total market cap of Bitcoin.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Flipping',

'meaning' => 'An investment strategy (mostly popularized by real estate investing) where you buy something with the goal of reselling for a profit later, usually in a short period of time. In the context of ICOs, flipping refers to the strategy of investing in tokens before they are listed on exchanges, then quickly reselling them for a profit when they start trading on exchanges in the secondary market.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Fork (Blockchain)',

'meaning' => 'Forks, or chain splits, create an alternate version of the blockchain, leaving two blockchains to run simultaneously. An example is Ethereum and Ethereum Classic, which was forked after the DAO hack.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Fork (Software)',

'meaning' => 'A software fork, also known as a project fork, is when developers take the technology (source code) from one existing software project and modify it to create a new project. An example is Litecoin, which was a software fork of Bitcoin.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Front Running',

'meaning' => 'Front running is when you place a transaction in a queue when you have knowledge of a future transaction.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Full Node',

'meaning' => 'Nodes that download a blockchain’s entire history in order to observe and enforce its rules.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Fundamental Analysis (FA)',

'meaning' => 'A method in which you research the underlying value of an asset by looking at the technology, team, growth prospects and other indicators. Some people perform fundamental analysis as part of an investment strategy called “value investing.”

Futures

A futures contract is a standardized legal agreement to buy or sell a particular commodity or asset at a predetermined price at a specified time in the future. 

Gains

Gains refer to an increase in value or profit.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Gas',

'meaning' => 'A term used on the Ethereum platform that refers to a unit of measuring the computational effort of conducting transactions or smart contracts, or launch DApps in the Ethereum network. It is the “fuel” of the Ethereum network.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Gas Limit',

'meaning' => 'A term used on the Ethereum platform that refers to the maximum amount of gas the user is willing to spend on a transaction.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Gas Price',

'meaning' => 'A term used on the Ethereum platform that refers to the price you are willing to pay for a transaction.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Gavin Wood',

'meaning' => 'Gavin Wood is the co-founder of Parity Technologies, and one of the founders of Ethereum.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Genesis Block',

'meaning' => 'The first block of data that is processed and validated to form a new blockchain, often referred to as block 0 or block 1.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Gold-Backed Cryptocurrency',

'meaning' => 'A coin or token issued that represents a value of gold; for example, one physical gram of gold equals one coin. 

Governance Token

A governance token is a token that can be used to vote on decisions that influence an ecosystem.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Graphical Processing Unit (GPU)',

'meaning' => 'More commonly known as a graphics card, it is a computer chip that creates 3D images on computers, but has turned out to be efficient for mining cryptocurrencies.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Group Mining',

'meaning' => 'As opposed to solo mining, group mining is when multiple people mine together.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Gwei',

'meaning' => 'The denomination used in defining the cost of gas in transactions involving Ether.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'HODL',

'meaning' => 'A type of passive investment strategy where you hold an investment for a long period of time, regardless of any changes in the price or markets. The term first became famous due to a typo made in a Bitcoin forum, and the term is now commonly expanded to stand for “Hold On for Dear Life.”

Hacking

Hacking is the process of using a computer to manipulate another computer or computer system in an unauthorized fashion.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Hal Finney',

'meaning' => 'Hal Finney was a cryptographer and programmer who pioneered Bitcoin’s development and worked with Satoshi Nakamoto.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Halving',

'meaning' => 'An event in which the total rewards per confirmed block halves.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Hard Cap',

'meaning' => 'A hard cap is the absolute maximum supply of a digital asset.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Hard Fork (Blockchain)',

'meaning' => 'A type of protocol change that validates all previously invalid transactions, and invalidates all previously valid transactions.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Hardware Security Module',

'meaning' => 'A hardware security module is a type of computing device that secures digital keys and encrypts data.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Hardware Wallet',

'meaning' => 'A hardware wallet is a wallet for cryptocurrencies that usually resemble a USB stick.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Hash',

'meaning' => 'The act of performing a hash function on input data of arbitrary size, with an output of fixed length that looks random and from which no data can be recovered without a cipher. An important property of a hash is that the output of hashing a particular document will always be the same when using the same algorithm.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Hash Function',

'meaning' => 'Any function used to map data of arbitrary size to data of a fixed size. *see Cryptographic Hash Function.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Hash Power / Hash Rate',

'meaning' => 'A unit of measurement for the amount of computing power being consumed by the network to continuously operate. 

Hidden Cap

Hidden cap is an unknown limit to the amount of money a team elects to receive from investors in its initial coin offering (ICO). The purpose of a hidden cap is to even the playing field by letting smaller investors put in money, without the large investors forming an accurate understanding of the total cap and adjusting their investment as a result.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Hierarchical Deterministic Wallet (HD Wallet)',

'meaning' => 'A wallet that uses Hierarchical Deterministic (HD) protocol to support the generation of crypto-wallets from a single master seed using 12 mnemonic phrases.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Hosted Wallet',

'meaning' => 'A wallet managed by a third-party service.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Hot Storage',

'meaning' => 'The online storage of private keys allowing for quicker access to cryptocurrencies. *see Cold Storage.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Hot Wallet',

'meaning' => 'A cryptocurrency wallet that is connected to the internet for hot storage of cryptoassets, as opposed to an offline, cold wallet with cold storage. *See Cold Wallet.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Howey Test',

'meaning' => 'A test used to determine whether or not an asset is a security.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Hybrid PoW/PoS',

'meaning' => 'A hybrid PoW/PoS allows for both proof-of-stake and proof-of-work as consensus distribution algorithms on the network. This approach aims to bring together the security of PoW consensus and the governance and energy efficiency of PoS.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Hyperledger (Hyperledger Foundation)',

'meaning' => 'Hyperledger is an umbrella project of open source blockchains and blockchain-related tools started by the Linux Foundation in 2015 to support the collaborative development of blockchain-based distributed ledgers.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Immutable',

'meaning' => 'A property that defines the inability to be changed, especially over time.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Impermanent Loss',

'meaning' => 'Impermanent loss is when a liquidity provider has a temporary loss of funds because of volatility in a trading pair.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Infinite Approval',

'meaning' => 'Pre-approving smart contracts to enable the platform to spend any amount of your coins.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Inflation',

'meaning' => 'A general increase in prices and fall in the purchasing value of money.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Initial Bounty Offering (IBO)',

'meaning' => 'A novel way of launching a project that focuses on people contributing skills to a platform rather than money.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Initial Coin Offering (ICO)',

'meaning' => 'Short for Initial Coin Offering, an ICO is a type of crowdfunding, or crowdsale, using cryptocurrencies as a means of raising capital for early-stage companies. 

Initial Dex Offering

An initial dex offering (IDX) is an alternative to an initial coin offering (ICO).',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Initial Exchange Offering',

'meaning' => 'A type of crowdfunding where crypto start-ups generate capital by listing through an exchange.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Initial Token Offering (ITO)',

'meaning' => 'ITOs are similar to initial coin offerings — but have more of a focus on offering tokens with intrinsic utility in the form of software or usage in an ecosystem.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Instamine',

'meaning' => 'When a large portion of a coin’s total supply is distributed to investors shortly after launch.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Intermediary/Middleman',

'meaning' => 'A person or entity that acts as the go-between different parties to bring about agreements or carry out directives.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Internet of Things',

'meaning' => 'Internet of Things (IoT) is a global interconnected network of devices, sensors and software that can collect and exchange data with each other in real-time over the Internet.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'JOMO',

'meaning' => 'The opposite state of JOMO stands for “Joy of Missing Out.”

Know Your Customer (KYC)

Short for Know Your Customer, these are checks that crypto exchanges and trading platforms must complete to verify the identity of their customers.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Lambo',

'meaning' => 'Slang for the type of car that many crypto enthusiasts aspire to buy when their digital assets “moon” — or rise in value substantially.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Ledger',

'meaning' => 'A record of financial transactions that cannot be changed, only appended with new transactions.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Leverage',

'meaning' => 'Money that a trader borrows from a brokerage, enabling them to gain far greater exposure to a position than what their capital allows.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Lightning Network',

'meaning' => 'A second-layer protocol that is designed to solve Bitcoin’s scalability problem by allowing transactions to be processed more quickly.-inline-block

Limit Order/Limit Buy/Limit Sell

Tools that enable traders to automatically buy or sell cryptocurrencies on a trading platform when a certain price target is reached.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Liquidity',

'meaning' => 'How easily a cryptocurrency can be bought and sold without impacting the overall market price.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Liquidity Pool',

'meaning' => 'Liquidity pools are crypto assets that are kept to facilitate the trading of trading pairs on decentralized exchanges.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Liquidity Provider',

'meaning' => 'Liquidity providers are decentralized exchange users who fund a liquidity pool with tokens they own.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Liveness',

'meaning' => 'A guarantee that a system will continue to provide data, and that no centralized authority can shut down its services.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Long',

'meaning' => 'A situation where you buy a cryptocurrency with the expectation of selling it at a higher price for profit later.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Mainnet',

'meaning' => 'An independent blockchain running its own network with its own technology and protocol. It is a live blockchain where its own cryptocurrencies or tokens are in use, as compared to a testnet or projects running on top of other popular networks such as Ethereum.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Margin Call',

'meaning' => 'When an investor’s account value falls below the margin maintenance amount. The broker will then demand that the investor deposit additional money or securities to meet the minimum required maintenance amount to continue trading.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Margin Trading',

'meaning' => 'A practice where a trader uses borrowed funds from a broker to trade a cryptocurrency, which forms the collateral for the loan from the broker. It can be relatively risky for inexperienced traders who may receive a margin call if the market moves in the opposite direction of their trades. * Margin Bear Position The position you are taking if you are going “short” on margin. * Margin Bull Position The position you are taking if you are going “long” on margin.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Market',

'meaning' => 'An area or arena, online or offline, in which commercial dealings are conducted. Usually referred to as the “crypto market,” which refers to the cumulative cryptocurrencies and projects operating within the industry.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Market Capitalization/Market Cap/MCAP',

'meaning' => 'Total capitalization of a cryptocurrency’s price. It is one of the ways to rank the relative size of a cryptocurrency. *see Circulating Supply.-inline-block

Market Order/Market Buy/Market Sell

A purchase or sale of a cryptocurrency on an exchange at the current best available price. Market orders are filled as buyers and sellers are willing to trade. This is in contrast with limit orders at which a cryptocurrency is sold only at a specified price.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Masternodes',

'meaning' => 'Masternodes are a server maintained by its owner, somewhat like full nodes, but with additional functionalities such as anonymizing transactions, clearing transactions, and participating in governance and voting. It was initially popularized by Dash to reward owners of these servers for maintaining a service for the blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Max Supply',

'meaning' => 'The best approximation of the maximum amount of coins that will ever exist in the lifetime of the cryptocurrency. *see Circulating Supply and Total Supply.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Merkle Tree',

'meaning' => 'A tree structure in cryptography, in which every leaf node is labelled with the hash of a data block and every non-leaf node is labelled with the cryptographic hash of the labels of its child nodes. Hash trees allow efficient and secure verification of the contents of blockchains, as each change propagates upwards so verification can be done by simply looking at the top hash.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'MetaMask',

'meaning' => 'An online digital wallet that allows users to manage, transfer and receive Ethereum, operating as an extension to a regular browser.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'MicroBitcoin (uBTC)',

'meaning' => 'One millionth of a bitcoin or 0.000001 of a bitcoin. Often confused as a fork of Bitcoin.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Microtransaction',

'meaning' => 'A business model where very small payments can be made in exchange for common digital goods and services, such as pages of an ebook or items in a game.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Mineable',

'meaning' => 'Some cryptocurrencies have a system through which miners can be rewarded with newly-created cryptocurrencies for creating blocks through contributing their hash power. Cryptocurrencies with this ability to generate new cryptocurrencies through the process of confirmation is said to be mineable.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Miners',

'meaning' => 'Contributors to a blockchain taking part in the process of mining. They can be professional miners or organizations with large-scale operations, or hobbyists who set up mining rigs at home or in the office.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Mining',

'meaning' => 'A process where blocks are added to a blockchain, verifying transactions. It is also the process through which new bitcoin or some altcoins are created.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Mining Contract',

'meaning' => 'Another term for cloud mining, where users can rent or invest in mining capacity online.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Mining Pool',

'meaning' => 'A setup where multiple miners combine their computing power to gain economies of scale and competitiveness in finding the next block on a blockchain. Rewards are split according to different agreements, depending on the mining pool. Another term for this is Group Mining.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Mining Reward',

'meaning' => 'The reward resulting from contributing computing resources to process transactions. Mining rewards are usually a mix of newly-minted coins and transaction fees.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Mining Rig',

'meaning' => 'A computer being used for mining. A mining rig could be a dedicated piece of hardware for mining, or a computer with spare capacity that can be used for other tasks, only mining part time.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Minnow',

'meaning' => 'Another term used to describe Fish.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Mixing Service',

'meaning' => 'Also known as a tumbler, it is a service to improve the privacy and anonymity of cryptocurrency transactions by mixing potentially identifiable or “tainted” cryptocurrencies with other unrelated transactions, making it harder to track what the cryptocurrency was used for and who it belongs to.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Mnemonic Phrase',

'meaning' => 'A mnemonic phrase (also known as mnemonic seed, or seed phrase) is a list of words used in sequence to access or restore your cryptocurrency assets. It should be kept secret from everyone else. It is a standard in most HD wallets.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Mnemonics',

'meaning' => 'Mnemonics are memory aids with a system such as letters or associations that help in recall. *see Mnemonic Phrase.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Mobile Wallet',

'meaning' => 'A mobile wallet is a crypto wallet installed on a mobile device.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Money Transmitter/Money Transfer License',

'meaning' => 'In the legal code of the United States, a money transmitter or money transfer service is a business entity that provides money transfer services or payment instruments, whether it is real currency, cryptocurrency or any other value. Money transmitters in the US are part of a larger group of entities called money service businesses or MSBs.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Moon',

'meaning' => 'A situation where there is a continuous upward movement in the price of a cryptocurrency. Often used in communities to question when a cryptocurrency will experience such a phenomenon, saying “When moon?” It is usually combined with “When Lambo?”

Moving Average Convergence Divergence (MACD)

A technical analysis method, it is a trend-following momentum indicator that shows the relationship between two price moving averages. The calculation is done by subtracting the 26-day exponential moving average (EMA) from the 12-day EMA.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Mt. Gox',

'meaning' => 'Mtgox or Mt. Gox was one of the first websites where users could take part in fiat-to-bitcoin exchange (and vice versa). In 2014, Mt. Gox was shut down after about 850,000 bitcoin was declared lost or stolen. Mt. Gox was created in 2006 by Jed McCaleb who named it after Magic The Gathering Online Exchange where users could use the cards like stocks. Jed later sold Mt. Gox to Mark Karpelès in 2011.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Multi-Signature (Multi-Sig)',

'meaning' => 'Multi-signature addresses provide an added layer of security by requiring more than one key to authorize a transaction.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Network',

'meaning' => 'A network refers to all nodes in the operation of a blockchain at any given moment in time.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Nick Szabo',

'meaning' => 'Nick Szabo is the inventor of Bit Gold and the use of smart contracts.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'No-Coiner',

'meaning' => 'A no-coiner is someone who has no cryptocurrency in his or her investment portfolio and firmly believes that cryptocurrency in general will fail.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Node',

'meaning' => 'The most basic unit of blockchain infrastructure that stores data.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Non-Custodial',

'meaning' => 'Usually referring to the storage of keys, in relation to wallets or exchanges, a non-custodial setup is one in which private keys are held by the user directly. 

Non-Fungible Token

Non-fungible tokens (NFTs) are cryptocurrencies that do not possess the property of fungibility.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Nonce',

'meaning' => 'When a transaction is hashed by a miner, an arbitrary number meant to be used only once is generated, called a nonce.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Off-Ledger Currency',

'meaning' => 'A currency that is created (minted) outside of the specified blockchain ledger but is accepted or used.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Offline Storage',

'meaning' => 'The act of storing cryptocurrencies in devices or systems not connected to the internet. 

On-Ledger Currency

A currency that is both minted on the blockchain ledger and also used on the blockchain ledger, such as Bitcoin.-inline-block

One Cancels the Other Order (OCO)

A situation where two orders for cryptocurrency are placed simultaneously, with a rule in place to enforce that if one is accepted, the other is cancelled.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Online Storage',

'meaning' => 'The act of storing cryptocurrencies in devices or systems connected to the internet. 

Open Source

Open source is a philosophy, with participants believing in the free and open sharing of information in pursuit of the greater common good.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Open/Close',

'meaning' => 'The price at which a cryptocurrency opens at a time period or the programming principle of software parts being extendable.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Option',

'meaning' => 'A contract giving the buyer the right, but not the obligation, to buy or sell an underlying asset or instrument at a specified strike price. 

Options Market

A public market for options, giving the buyer an option to buy or sell a cryptocurrency at a specific strike price, on or before a specific date.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Oracles',

'meaning' => 'An agent that finds and verifies information, bridging the real world and the blockchain by providing data to smart contracts for execution of said contracts under specified conditions.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Order Book',

'meaning' => 'An order book comprises different key information regarding an asset.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Orphan',

'meaning' => 'A valid block on the blockchain that is not part of the main chain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Over-the-Counter (OTC)',

'meaning' => 'Over-the-counter is defined as a transaction made outside of an exchange, often peer-to-peer through private trades.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Overbought',

'meaning' => 'When a cryptocurrency has been purchased by more and more investors over time, with its price increasing for an extended period of time. 

Oversold

When a cryptocurrency has been sold by more and more investors over time, with its price decreasing for an extended period of time.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Pair',

'meaning' => 'Trade between one cryptocurrency and another, for example, the trading pair BTC/ETH.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Paper Wallet',

'meaning' => 'A physical document containing your private key or seed phrase.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Peer-to-Peer (P2P)',

'meaning' => 'The decentralized interactions between parties in a distributed network, partitioning tasks or workloads between peers.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Permissioned Ledger',

'meaning' => 'A ledger designed with restrictions, such that only people or organizations requiring access have permission to access it.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Permissionless',

'meaning' => 'Often used to describe blockchains, a system is said to be permissionless when there is no entity that can regulate who can use it and how it can be used.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Phishing',

'meaning' => 'When a scammer pretends to be a trusted institution or person to trick people into revealing sensitive information such as Social Security numbers, passwords, banking details, etc., often through a malware link disguised as legitimate.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Platform',

'meaning' => 'On CoinMarketCap, platform refers to the parent blockchain of tokens. It may also refer to a cryptocurrency exchange on which you may trade cryptocurrencies.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Ponzi Scheme',

'meaning' => 'A fraudulent investment involving the payment of purported returns to existing investors from funds contributed by new investors.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Portfolio',

'meaning' => 'A collection of cryptocurrencies or crypto assets held by an investment company, hedge fund, financial institution or individual.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Post-Mine',

'meaning' => 'The retroactive creation of new coins following a cryptocurrency’s launch, before public mining is possible.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Pre-Mine',

'meaning' => 'When some or all of a coin’s initial supply is generated during or before the public launch.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Pre-Sale',

'meaning' => 'The sale of a cryptocurrency, ahead of it going public, to specific investors.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Price Impact',

'meaning' => 'The difference between market price and estimated price due to trade size.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Private Key/Secret Key',

'meaning' => 'A piece of code generated in asymmetric-key encryption process, paired with a public key, to be used in decrypting information hashed with the public key.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Proof-of-Authority (PoA)',

'meaning' => 'A blockchain consensus mechanism that delivers comparatively fast transactions using identity as a stake.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Proof-of-Burn (PoB)',

'meaning' => 'A blockchain consensus mechanism aiming to bootstrap one blockchain to another with increased energy efficiency, by verifying that a cost was incurred in “burning” a coin by sending it to an unspendable address.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Proof-of-Developer (PoD)',

'meaning' => 'Any verification that provides evidence of a real, living software developer who created a cryptocurrency, in order to prevent an anonymous developer from making away with any raised funds without delivering a working model.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Proof-of-Replication',

'meaning' => 'Proof-of-replication (PoRep) is the way that a storage miner proves to the network that they are storing an entirely unique copy of a piece of data.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Proof-of-Spacetime',

'meaning' => 'In simplest terms, PoSt means that someone can now guarantee that they are spending a certain amount of space for storage.&nbsp;

Proof-of-Stake (PoS)

A blockchain consensus mechanism involving choosing the creator of the next block via various combinations of random selection and wealth or age of staked coins or tokens.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Proof-of-Work (PoW)',

'meaning' => 'A blockchain consensus mechanism involving solving of computationally intensive puzzles to validate transactions and create new blocks. *see Proof-of-Stake (PoS).',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Protocol',

'meaning' => 'The set of rules that define interactions on a network, usually involving consensus, transaction validation, and network participation on a blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Pseudonymous',

'meaning' => 'Writing under a false name, such as “Satoshi Nakamoto.”

Public Address

A public address is the cryptographic hash of a public key, allowing the user to use it as an address to request for payment.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Public Blockchain',

'meaning' => 'A blockchain that can be accessed by anyone.-inline-block

Pump and Dump Scheme

A form of securities fraud involving the artificial inflation of the price of a cryptocurrency with false and misleading positive statements in order to sell previously-cheaply purchased stock at a higher price.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'QR Code',

'meaning' => 'A machine-readable label that shows information encoded into a graphical black-and-white pattern. For cryptocurrencies, it is often used to easily share wallet addresses with others.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'REKT',

'meaning' => 'A shorthand slang for “wrecked,” describing a bad loss in a trade.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'ROI',

'meaning' => 'Short for “Return on Investment” the ratio between the net profit and cost of investing.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Raiden Network',

'meaning' => 'An off-chain scaling solution aiming to enable near-instant, low-fee and scalable payments on the Ethereum blockchain, similar to Bitcoin\'s proposed Lightning Network.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Rank',

'meaning' => 'The relative position of a cryptocurrency by market capitalization.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Rebase',

'meaning' => 'A token designed so that the circulating supply adjusts automatically according to price fluctuations. 

Relative Strength Index (RSI)

A form of technical analysis that serves as a momentum oscillator, measuring the speed and change of price movements.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Replicated Ledger',

'meaning' => 'A copy of a distributed ledger in a network that is distributed to all participants in a cryptocurrency network.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Resistance (Line/Level)',

'meaning' => 'The highest price level of an asset during a specific period.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Reverse Indicator',

'meaning' => 'A person whom you may use as an indicator of how not to place buy or sell orders because they are always wrong at predicting price movements of cryptocurrencies.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Ring Signature',

'meaning' => 'A cryptographic digital signature that obfuscates the identities of two parties within a transaction.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Rug Pull',

'meaning' => 'A rug pull is a type of scam where developers abandon a project and take their investors\' money.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'SHA-256',

'meaning' => 'A cryptographic hash function that generates a 256-bit signature for a text, used in Bitcoin proof-of-work (PoW).',
'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'SIM-Swap',

'meaning' => 'SIM-swaps — sometimes referred to as port-out scams — have come into the spotlight as a major concern for cryptocurrency holders in recent years.',
'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Satoshi (SATS)',

'meaning' => 'The smallest unit of bitcoin with a value of 0.00000001 BTC.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Satoshi Nakamoto',

'meaning' => 'The individual or group of individuals that created Bitcoin. The identity of Satoshi Nakamoto has never been confirmed.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Scaling Problem',

'meaning' => 'The scaling problem is the limitations of a blockchain\'s transaction throughout and ability to have fast and low cast transactions.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Scaling Solution',

'meaning' => 'A scaling solution is a method of enable a system to expand.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Scam',

'meaning' => 'A fraudulent or deceptive cryptocurrency or ICO.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Scrypt',

'meaning' => 'An alternative proof-of-work (PoW) algorithm to SHA-256, used in Bitcoin mining. Scrypt mining relies more heavily on memory than on pure CPU power, aiming to reduce the advantage that ASICs have and hence increasing network participation and energy efficiency.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Second-Layer Solutions',

'meaning' => 'A set of solutions built on top of a public blockchain to extend its scalability and efficiency, especially for micro-transactions or actions. Examples include Plasma, TrueBit, Lightning Network and more.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Secure Element',

'meaning' => 'A secure element is a type of hardware chip that runs a specified number of applications.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Secure Multi-Party Computation (sMPC)',

'meaning' => 'SMPC is a subfield of cryptography that allows parties to compute a function while keeping the inputs private.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Securities and Exchange Commission (SEC)',

'meaning' => 'An independent agency of the United States federal government, responsible for enforcing federal securities laws, proposing securities rules, and regulating the securities industry, the nation\'s stock and options exchanges, and other related activities and organizations.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Security Token',

'meaning' => 'A security token is essentially a digital form of traditional securities. 

Seed Phrase

A single starting point when deriving keys for a deterministic wallet.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Segregated Witness (SegWit)',

'meaning' => 'A Bitcoin Improvement Proposal (BIP) that aimed to fix transaction malleability on Bitcoin. 

Selfish Mining

A situation in which a miner mines a new block but does not broadcast this new block to the other miners. 

Sell Wall

A situation where a large limit order has been placed to sell when a cryptocurrency reaches a certain value. 

Sharding

Sharding is a scaling approach that enables splitting of blockchain states into partitions containing states and transaction history, so that each shard can be processed in parallel.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Shilling',

'meaning' => 'The act of enthusiastically promoting a cryptocurrency or ICO project.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Shitcoin',

'meaning' => 'A coin with no obvious potential value or usage.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Short',

'meaning' => 'A trading technique in which a trader borrows an asset in order to sell it, with the expectation that the price will continue to decline. In the event that the price does decline, the short seller will then buy the asset at this lower price in order to return it to the lender of the asset, making the difference in profit.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Side Chain',

'meaning' => 'A blockchain ledger that runs in parallel to a primary blockchain, where there is a two-way link between the primary chain and sidechain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Signal',

'meaning' => 'Signals are a call to action to either buy or sell an asset.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Silk Road',

'meaning' => 'An online black market that existed on the dark web, now shut down by the FBI. It had accepted bitcoins for transactions.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Simplified Payment Verification (SPV)',

'meaning' => 'A lightweight client to verify blockchain transactions, downloading only block headers and requesting proof of inclusion to the blockchain in the Merkle Tree.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Slippage',

'meaning' => 'Slippage happens when traders have to settle for a different price than what they initially requested due to a price movement.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Smart Contract',

'meaning' => 'A smart contract is a computer protocol intended to facilitate, verify or enforce a contract on the blockchain without third parties.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Smart Contract Audit',

'meaning' => 'A smart contract audit is a security check done by cybersecurity professionals meant to ensure that the on-chain code behind a smart contract is devoid of bugs or security vulnerabilities.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Soft Cap',

'meaning' => 'The minimum amount that an initial coin offering (ICO) wants to raise. 

Soft Fork (Blockchain)

A protocol upgrade where only previously valid transactions are made invalid, with most soft forks requiring miners to upgrade their mining software.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Solidity',

'meaning' => 'The programming language used by Ethereum for developing smart contracts.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Spoon (Blockchain)',

'meaning' => 'A hard spoon is a meta-protocol that exists on top of a blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Spot',

'meaning' => 'A contract or transaction buying or selling a cryptocurrency for immediate settlement, or payment and delivery, of the cryptocurrency on the market.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Spot Market',

'meaning' => 'A public market in which cryptocurrencies are traded for immediate settlement. It contrasts with a futures market, in which settlement is due at a later date.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Spyware',

'meaning' => 'Spyware is a malware that records all of the activities on an electronic device.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Stablecoin',

'meaning' => 'A cryptocurrency with extremely low volatility, sometimes used as a means of portfolio diversification. Examples include gold-backed cryptocurrency or fiat-pegged cryptocurrency.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Staking',

'meaning' => 'Participation in a proof-of-stake (PoS) system to put your tokens in to serve as a validator to the blockchain and receive rewards.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Stale Block',

'meaning' => 'A block which was successfully mined but not included on the current longest blockchain, usually because another block at the same height was added to the chain first.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'State Channel',

'meaning' => 'A second-layer scaling solution that reduces the total on-chain transactions necessary, moving the transactions off-chain and letting participants sign to the main chain after multiple off-chain transactions.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Storage (Decentralized)',

'meaning' => 'Decentralized storage refers to the concept of storing files online by splitting them into encrypted fragments and delegating these fragments to multiple nodes on a distributed network, e.g. a blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Symbol',

'meaning' => 'The ticker of a cryptocurrency; for example, bitcoin’s symbol is BTC.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Taint',

'meaning' => 'The percentage of cryptocurrency in an account that can be traced to another account.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Tangle',

'meaning' => 'The Tangle is a blockchain alternative developed by IOTA, using directed acyclic graphs which only builds in one single direction and in a way that it never repeats, and is quantum-computing resistant.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Technical Analysis/Trend Analysis (TA)',

'meaning' => 'An evaluation method involving statistical analyses of market activity, such as price and volume. Charts and other tools are used to identify patterns to underpin and drive investment decisions.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Testnet',

'meaning' => 'An alternative blockchain used by developers for testing.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Think Long Term (TLT)',

'meaning' => 'A mindset where you have a longer-term investment horizon of months to years.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'This Is Gentlemen',

'meaning' => 'Originally an error in writing the full “This is it, gentlemen”. It is now used as an introduction for good news.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Throughput',

'meaning' => 'Throughput is how many actions can be completed in a given time frame.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Ticker',

'meaning' => 'An abbreviation used to uniquely identify cryptocurrencies.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Timelock/Locktime',

'meaning' => 'A condition for a transaction to only be processed at a certain time or block on the blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Timestamp',

'meaning' => 'A form of identification for when a certain transaction occurred, usually with date and time of day and accurate to fractions of a second.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Tipset',

'meaning' => 'A tipset is a set, rather than a chain, of blocks that make up a blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Token',

'meaning' => 'A digital unit designed with utility in mind, providing access and use of a larger crypto economic system. It does not have a store of value on its own, but is made so that software can be developed around it.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Token Generation Event',

'meaning' => 'The time at which a token is issued.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Token Swap',

'meaning' => 'Token swaps can refer to one of two things: 1. Direct exchange of a certain amount of one cryptocurrency token for another between users facilitated by a special exchange service. 2. Migration of a cryptocurrency token built on top of one blockchain platform to a different blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Tokenize',

'meaning' => 'The process by which real-world assets are turned into something of digital value called a token, often subsequently able to offer ownership of parts of this asset to different owners.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Tor',

'meaning' => 'Tor is a decentralized network that anonymizes users\' web traffic by encrypting it and routing it through a series of relays before it reaches its final destination.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Total Supply',

'meaning' => 'The total amount of coins in existence right now, minus any coins that have been verifiably burned. *see Circulating Supply and Max Supply.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Trade Volume',

'meaning' => 'The amount of the cryptocurrency that has been traded in the last 24 hours.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Transaction (TX)',

'meaning' => 'The act of exchanging cryptocurrencies on a blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Transaction Fee',

'meaning' => 'A payment for using the blockchain to transact.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Trustless',

'meaning' => 'A property of the blockchain, where no participant needs to trust any other participant for transactions to be enforced as intended.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Tumbler',

'meaning' => 'Another name for a mixing service.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Turing-Complete',

'meaning' => 'Turing-complete refers to the ability of a machine to perform calculations that any other programmable computer is capable of. An example of this is the Ethereum Virtual 
Machine (EVM).',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'UTC Time',

'meaning' => 'Coordinated Universal Time. It is the primary time standard by which the world regulates clocks and time, kept using highly precise atomic clocks combined with the Earth’s rotation.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Unbanked',

'meaning' => 'Unbanked refers to those that are either unable to access banking services, or choose not to.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Unconfirmed',

'meaning' => 'A state in which a transaction has not been appended to the blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Unpermissioned Ledger',

'meaning' => 'A public blockchain.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Unspent Transaction Output (UTXO)',

'meaning' => 'An output of a blockchain transaction that has not been spent, and can be used as an input for new transactions.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Utility Token',

'meaning' => 'Tokens that are designed specifically to be able to help people use something. 

Validator

A participant on a proof-of-stake (PoS) blockchain, involved in validating blocks for rewards.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Vanity Address',

'meaning' => 'A cryptocurrency public address with custom letters and numbers, usually picked by its owner.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Vaporware',

'meaning' => 'A cryptocurrency project that is never actually developed.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Venture Capital',

'meaning' => 'A form of private equity provided to fund small, early-stage firms considered to have high growth potential.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Virgin Bitcoin',

'meaning' => 'A bitcoin that has never been spent.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Vitalik Buterin',

'meaning' => 'Vitalik Buterin is one of the creators of Ethereum, the second-largest cryptocurrency after Bitcoin.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Volatility',

'meaning' => 'A statistical measure of dispersion of returns, measured by using the standard deviation or variance between returns from that same security or market index.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Volume',

'meaning' => 'The amount of cryptocurrency that has been traded during a certain period of time, such as the last 24 hours or more. Volume can show the direction and movement of the cryptocurrency as well as a prediction of future price and its demand.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Wallet',

'meaning' => 'A cryptocurrency wallet is a secure digital wallet used to store, send, and receive digital currency, and are divided into two categories hosted wallets and cold wallets.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Wash Trade',

'meaning' => 'A form of market manipulation in which investors create artificial activity in the marketplace by simultaneously selling and buying the same cryptocurrencies.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Watchlist',

'meaning' => 'A watchlist is a feature of the website where users can create their own lists of cryptocurrencies to follow. Alternative definition A watchlist is a set of pages a user has selected to monitor for changes.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Weak Hands',

'meaning' => 'An investor prone to panic selling at the first sign of a price decline.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Wei',

'meaning' => 'The smallest fraction of an Ether, with each Ether to 1000000000000000000 Wei.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Whale',

'meaning' => 'A term used to describe investors who have uncommonly large amounts of crypto, especially those with enough funds to manipulate the market. *see Fish/Minnow and Dolphin.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'When Lambo',

'meaning' => 'The extended expression for Lambo.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'When Moon',

'meaning' => 'The extended expression for Moon.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Whitelist',

'meaning' => 'A list of interested participants in an ICO, who registered their intent to take part or purchase in a sale.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Whitepaper',

'meaning' => 'A document prepared by an ICO project team to interest investors with its vision, cryptocurrency use and cryptoeconomic design, technical information, and a roadmap for how it plans to grow and succeed.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'YTD',

'meaning' => 'Stands for Year to Date.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Yield Farming',

'meaning' => 'Yield farming involves earning interest by investing crypto in decentralized finance markets.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Zero Confirmation Transaction',

'meaning' => 'Alternative phrasing for an unconfirmed transaction.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Zero-Knowledge Proof',

'meaning' => 'In cryptography, a zero-knowledge proof enables one party to provide evidence that a transaction or event happened without revealing private details of that transaction or event.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
],

['term' => 'Zk-SNARKs',

'meaning' => 'Zk-SNARKs (Zero-Knowledge Succinct Non-Interactive Argument of Knowledge) are the proof construction that one can verify information, like a secret key, both without disclosing the information itself or requiring any interaction between the prover and verifier.',

'source' => 'https://coinmarketcap.com/alexandria/glossary',
'created_at' => now(),
'updated_at' => now()
]

        ];

        Glossary::insert($terms);
    }
}
